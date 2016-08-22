<?php

 
define('BASE_PATH','http://localhost/Group-project/');
define('DB_HOST', 'localhost');
define('DB_NAME', 'homs');
define('DB_USER','root');
define('DB_PASSWORD','');

$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to database: " . mysql_error());
$db=mysqli_select_db($conn,DB_NAME) or die("Failed to connect to database: " . mysqli_error());
?>