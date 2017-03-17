<?php

ob_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="root"; // Mysql password
$db_name="aiysha"; // Database name
$tbl_name="members"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
//require('dbconnect.php');

// Define $myusername and $mypassword 
$myusername=$_POST['username'];
$mypassword=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
	// Register $myusername, $mypassword and redirect to file "login_success.php"
	echo "phpsucess";
session_start();
$_SESSION['username']= $myusername;
$_SESSION['password']= $mypassword;
if (isset($_POST["remember"]))
    setcookie("username",$_POST["username"], time() + (60*60*24));
// Set up associative array
 //   $data = array('success'=> true,'message'=>'Success message: hooray!');
    // JSON encode and send back to the server
//    echo json_encode($data);
header("location:success.php");
}
else {
	// Set up associative array
	echo "phpfailed";
echo "fail";
   // $data = array('success'=> false,'message'=>'Failure message: boo!');
    // JSON encode and send back to the server
    //echo json_encode($data);
	header("location:login.html");
//echo "Wrong Username or Password";
}
ob_end_flush();

?>