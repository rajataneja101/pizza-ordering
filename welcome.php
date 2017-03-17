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
    <p>
    <div class="form-horizontal">
<?php
require('dbconnect.php');

$type=$_POST['pizza_type_title'];
$topping=$_POST['pizza_topping_title'];
$crust=$_POST['crust_title'];
$query1 = mysql_query("SELECT price from pizza where pizza_type='$type' limit 1");
$row1=mysql_fetch_array($query1);
$query2 = mysql_query("SELECT price from crust where crust='$crust'");
$row2=mysql_fetch_array($query2);
$query3 = mysql_query("SELECT price from topping where pizza_topping='$topping'");
$row3=mysql_fetch_array($query3);
echo '<form class="form-horizontal" action="thn.html">';
echo "<h1>The type of pizza is: $type<br>The topping you have selected is: $topping<br>The crust type is: $crust<br></h1>";
$x=$row1[0]+$row2[0]+$row3[0];
echo "<h1>The total amount is ".$x."</h1><br>";
echo '<button class="btn btn-default">cool?</button>';
echo"</form>";
?>
</div>
</p>
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