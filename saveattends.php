<?php

include 'connection.php';
try {

$NIC = $_POST['nic'];
$DATE = $_POST['date'];
$Atten = $_POST['attend'];

$val = 0;

if ($Atten == 'true') {
    $val = 1;
}

//echo $NIC .$DATE .$Atten;

//mysqli_query($server, "insert into attleave(date,employee_nic,attend) values ('$DATE','$NIC','$val')");
    mysqli_query($server, "update attleave set attend='$val' WHERE employee_nic='$NIC' and date='$DATE' ");
   
    echo 'Hri mcn';
} catch (Exception $exc) {
}
?>