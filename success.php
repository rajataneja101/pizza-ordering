<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <title>
       Login Page
    </title>
     <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>

    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a> 
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
 
    <script src='js/device.min.js'></script> 
    
</head>
<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>

        <div class="camera_container">
            <div id="camera" class="camera_wrap">
                <div data-thumb="images/slide01_thumb.jpg" data-src="images/slide01.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
                <div data-thumb="images/slide02_thumb.jpg" data-src="images/slide02.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
                <div data-thumb="images/slide03_thumb.jpg" data-src="images/slide03.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
            </div>

            <div class="brand wow fadeIn">
                <h1 class="brand_name">
                    <a href="./">Pizza</a>
                </h1>
            </div>
        </div>
        
        <div class="toggle-menu-container">
            <nav class="nav">
                <div class="nav_title"></div>
                <a class="sf-menu-toggle fa fa-bars" href="#"></a>
                <ul class="sf-menu">
                    <li class="active">
                        <a href="./">Home</a>
                    </li>
                    <li>
                        <a href="index-1.html">About</a>
                        <ul>
                            <li>
                                <a href="#">Quisque nulla</a>
                            </li>
                            <li>
                                <a href="#">Vestibulum libero</a>
                                <ul>
                                    <li>
                                        <a href="#">Lorem</a>
                                    </li>
                                    <li>
                                        <a href="#">Dolor</a>
                                    </li>
                                    <li>
                                        <a href="#">Sit amet</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Vivamus eget nibh</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index-2.html">What We Do</a>
                    </li>
                    <li>
                        <a href="index-3.html">Menu</a>
                    </li>
                    <li>
                        <a href="index-4.html">Contacts</a>
                    </li>
                    <li>
                        <a href="login.html">Login</a>
                    </li>
                     <li>
                        <a href="signup.html">Sign up</a>
                    </li>
                </ul>
            </nav>            
        </div>

    </header>
<?
  // Attemp connection to MySQL server
  $link = @mysql_connect("localhost","root","root");

        if ($link == false) {
           echo "&result=Fail&errormsg=";
           echo urlencode("Failed to connect to MySQL server.");
           echo "&";
           exit;
        }

  // Attemp to select out DB
  if (mysql_select_db("aiysha") == false) {
  echo "&result=Fail&errormsg=";
  echo urlencode("Error selecting database.\
");
  echo urlencode("Error: " . mysql_error($link));
  echo "&";
  exit;
  }
  

//query the DB
$query = mysql_query("SELECT * from pizza");
printf('<form action="welcome.php" method="post" class="form-horizontal col-lg-6">');
printf('<h1>Enter Type:</h1><br>');
printf('<div class="form-group">');
printf('<label class="control-label col-sm-2" for="pizza_type_title">Pizza type:</label>');
printf('<div class="col-sm-10">');
print '<select name="pizza_type_title" class="form-control">';
while ($row = mysql_fetch_array($query)) 
{
printf('<option value="%s">%s price:%s',  $row[0],$row[0],$row[1]);
}
print '</select>';
printf('</div>');
printf('</div>');
$query1 = mysql_query("SELECT * from topping");
printf('<div class="form-group">');
printf('<label for="pizza_topping_title" class="control-label col-sm-2">Topping type:</label>');
printf('<div class="col-sm-10">');
print '<select name="pizza_topping_title" class="form-control">';
while ($row = mysql_fetch_array($query1)) 
{
printf('<option value="%s">%s price:%d',  $row[0],  $row[0],$row[1]);
}
print '</select>';
printf('</div>');
printf('</div>');
$query2 = mysql_query("SELECT * from crust");
printf('<div class="form-group">');
//build the drop down list
printf('<label class="control-label col-sm-2" for="crust_title" >Crust type:</label>');
printf('<div class="col-sm-10">');
print '<select name="crust_title" class="form-control">';
while ($row = mysql_fetch_array($query2)) 
{
printf('<option value="%s">%s price:%d', $row[0], $row[0],$row[1]);
}
print '</select><br>';
printf('</div>');
printf('</div>');
printf('<div class="col-sm-offset-2 col-sm-10">');
echo '<button type="submit" class="btn btn-default">Click me!</button>';
printf('</div>');
echo "</form>";

?>
<footer>
        <div class="container">
            <ul class="socials">
                <li><a href="./wwww.facebook.com" class="fa fa-facebook"></a></li>
                <li><a href="./wwww.tumblr.com" class="fa fa-tumblr"></a></li>
                <li><a href="./plus.google.com" class="fa fa-google-plus"></a></li>
            </ul>
            <div class="copyright">© <span id="copyright-year"></span> |
                <a href="#">Privacy Policy</a>
            </div>
        </div>
     
    </footer>
</div>

<script src="js/script.js"></script>


</div>
</body>
</html>
