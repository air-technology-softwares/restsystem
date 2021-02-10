<?php

define('DB_HOST', '	sql304.epizy.com'); // Replace with the name of your mysql server host
define('DB_USER', 'epiz_26759732'); // Replace with your phpmyadmin username
define('DB_PASS', '3jV9bbgrP0y4pY'); // Replace with your phpmyadmin password
define('DB_NAME', 'epiz_26759732_loginpage'); // Replace with the name of database you created

// Create a connection with the mysql database
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Some error occurred during connection, Please try again! " . mysqli_error($con));  ;

?>