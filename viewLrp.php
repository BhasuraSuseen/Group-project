<?php

include 'datetime.php';

include 'connection.php';

$res = mysqli_query($server, "SELECT
 employee.Nic,
  employee.FirstName,
  employee.LastName,
  attleave.leave,
  attleave.ReqType
FROM attleave
  INNER JOIN employee
    ON attleave.Employee_Nic = employee.Nic where attleave.date = '$date3' and attleave.leave = 'Y' ");//and attendence =
//and attendence = 0


$TEXTa = "<table border = '1' style='width: 70%'><tr style='background-color: appworkspace' ><td>ID</td><td>Name</td><td>Leave Type</td><td>Requed Type</td></tr>";

$TEXTb = "";
while ($row = mysqli_fetch_array($res)) {
    $TEXTb = $TEXTb . "<tr><td>'$row[0]'</td><td>'$row[1]' '$row[2]'</td><td>'$row[3]'</td><td>'$row[4]'</td></tr>";
}

$TEXTc = "</table>";
echo $TEXTa . $TEXTb . $TEXTc;
?>