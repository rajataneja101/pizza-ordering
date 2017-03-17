<?php
    require('dbconnect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$query ='';
		
			
			$query = "INSERT INTO `members`(username,email,password) VALUES ('$username','$email','$password')";
		
				
			
		
		
		
		
        $result = mysql_query($query);
        if($result){
        	$subject = "Welcome to PizzaHUb";
            $message = "Dear ".$username."  you have sucessfully registered for pizza ordering ";
          
			
			// header("location:http://nawinsandroidtutorial.site90.com/login.php");
			header("location:login.html");
        }
		else {
			echo"not done";
		}
    }
    ?>
