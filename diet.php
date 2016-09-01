<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="http://localhost/diet.css">
</head>

<body>
<div id="header">
<h1>HOMS</h1>
</div>
<div id="icbar">
</div>

<section class="container">
  
    <div class="left-half ">
      <h1>Diet Menu for children</h1>
	  
      <form name="diet" method="post" action="diet.php" accept-charset="utf-8">
		<table align = "center">
		<tr><td>DATE</td><td>
		<input type="date" name="date" placeholder="Date" width=100% required></td></tr>
		<tr><td>S1</td><td>
		<input type="number" name="count1" placeholder="Count" required></td></tr>
		<tr><td>S2</td><td>
		<input type="number" name="count2" placeholder="Count" required></td></tr>
		<tr><td>S3</td><td>
		<input type="number" name="count3" placeholder="Count" required></td></tr>
		<tr><td colspan=4 align="center"><input  type="submit" name="submit" value ="Save"><td></tr>
		</table>
		</form>
	
	</div>

<?php
require "connect.php";

if(isset($_POST["submit"])){
	$sone=$_POST["count1"];
	$stwo=$_POST["count2"];
	$sthree=$_POST["count3"];
	$date=$_POST["date"];

$sql = "INSERT INTO count (Date, S1_count, S2_count, S3_count)
VALUES ('$date', '$sone', '$stwo', '$sthree')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sqll = "SELECT S1, S2, S3 FROM children_menu";
$result = mysqli_query($conn, $sqll);
if (mysqli_num_rows($result) > 0) {
	echo "<table border=1><tr><th>S1 total</th>
	<th>S2 total</th><th>S3 total</th></tr>";
	while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["S1"]*$sone."</td><td>" 
		. $row["S2"]*$stwo. "</td><td>" . $row["S3"]*$sthree.
		"</td></tr>" ;
		 }


}

}


mysqli_close($conn);

?>


		
  
  
</section>


</body>
</html>


