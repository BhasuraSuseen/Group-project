
<?php
include 'datetime.php';
include 'connection.php';


$presentqury =mysqli_query($server, "select count(Attend) from attleave where attleave.date= '$date3' and attleave.Attend = 1 ");

while($row = mysqli_fetch_array($presentqury)){
      $present = $row[0];
      
}
// echo $present." Employees came today..";

$absentqury =mysqli_query($server, "select count(Attend) from attleave where attleave.date= '$date3' and attleave.Attend = 0 ");
while($row1 = mysqli_fetch_array($absentqury)){
      $absent = $row1[0];
     // echo $absent." Employees Absent today.";
}

$tot = $absent + $present;
echo nl2br($present." Employees came today.."."\n".$absent." Employees Absent today."."\nTotal is: ".$tot);
//echo nl2br(" Employees came today.\n.");

?>
