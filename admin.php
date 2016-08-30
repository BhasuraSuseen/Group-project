<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel ="stylesheet" type="text/css" href="http://localhost/Group-Project/FrontendCSS.css">
</head>
<body>
<div id="header">
<h1>HOMS</h1>
</div>
<div id="icbar">
<a href="login.php"><button class="button button2" id="btright">Log Out</button></a>
</div>
<?php
require "connect.php";

 session_start(); 
 


$sql = "SELECT USERNAME,ADMIN,Empid FROM users WHERE USERNAME!='".$_SESSION['username']."'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo "<table border=1 class='tbutton'><tr><th>User Name</th>
	<th>Administrator</th><th>Employee ID</th></tr>";
   
	while($row = mysqli_fetch_assoc($result)) {
		
        echo "<tr class='even td'><td>".$row["USERNAME"]."</td><td>" 
		. $row["ADMIN"]. "</td><td>" . $row["Empid"].
		"</td></tr>" ;
		
	
	}

}
 echo"</table>";
mysqli_close($conn);
?>

</body>
</html>