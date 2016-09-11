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
<a href="home.php"><button class="button button2" id="btright">Home</button></a>
</div>
<div id="log">

 <form name="new_user" action="admin.php" method="post" accept-charset="utf-8">
			<table>
			<thead>
			<tr>
			<th colspan=2>Enter New User Details </th></thead>
			</tr>
			<tr><td>User Name</td><td> 
			<input type="text" name="user_name" size="20" required></td></tr>
			<tr><td>Password</td><td> 
			<input type="password" name="password" size="20" required></td></tr>
			<tr><td>Employee ID</td><td> 
			<input type="number" name="Empid" size="20" required></td></tr>
			<tr><td>User Type</td><td><input type="radio" name="usertype" value="1"> Administrator
  			<input type="radio" name="usertype" value="0" required=""> User</td></tr>
			<tr><td colspan=2 align="center">
			<input type="submit" value="Add new user" name="submit" class="button">
			<input type="reset" value="Reset" class="button"></td>
			</tr></table>
			</form>
<?php
require "connect.php";

 session_start(); 
 
echo "Welcome ". $_SESSION['username'];

$sql = "SELECT USERNAME,ADMIN,Empid FROM users WHERE USERNAME!='".$_SESSION['username']."'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo "<table width=100%><tr><th>User Name</th>
	<th>Administrator</th><th>Employee ID</th></tr>";
   
	while($row = mysqli_fetch_assoc($result)) {
		
        echo "<tr><td>".$row["USERNAME"]."</td><td>" 
		. $row["ADMIN"]. "</td><td>" . $row["Empid"].
		"</td></tr>" ;
		
	
	}

}
 echo"</table>";
 if(isset($_POST["submit"])){
 	 $user = $_POST['user_name'];
 	 $id = $_POST['Empid'];
 	 $pass = $_POST['password'];
 	 $admin = $_POST['usertype'];
 	 /*checking if the user name is taken */
  $usernamecheck="select * from users where USERNAME='$user'";
  $result1=mysqli_query($conn,$usernamecheck);
if(mysqli_num_rows($result1)>=1){
   echo $user." is already taken";
  		
 }
 else{
 	/*checking if the user is in the database*/
 		$idcheck="select * from employee where EMP_ID='$id'";
   		$result2=mysqli_query($conn,$idcheck);
   		if(mysqli_num_rows($result2)>=1){
   			/*checking if the user has an account already*/
  				$idcheck2="select * from users where Empid='$id'";
  				$result3=mysqli_query($conn,$idcheck2);
  				if(mysqli_num_rows($result3)>=1){
   				echo $user." has an account already";}
   				else{
   					$sql1="INSERT INTO users (USERNAME,PASSWORD,ADMIN,Empid) VALUES ('$user','$pass','$admin','$id')";
   					mysqli_query($conn,$sql1);
   					echo $user . "was entered successfully";
   				}
   		}		
   		else{echo "Please enter a valid Employee ID number";}
		 
		 
 }
}

mysqli_close($conn);
?>
</div>
</body>
</html>