<?php

include 'connection.php';
include 'datetime.php';

$leave = $_POST['leave'];
$type = $_POST['type'];
$rtype = $_POST['rtype'];
$nic = $_POST['nic'];


echo $type.",".$leave.",".$rtype.",".$nic.",".$date3;



   // mysqli_query($server, "select Leave from attleave WHERE attend='1' ");
  mysqli_query($server, "update attleave set Leave='$leave',LeaveType=$type,ReqType=$rtype WHERE   date=$date3 ");
    




 //  mysqli_query($server, "insert into attleave(Date,Leave,LeaveType,ReqType,Employee_Nic) values ('$date3','$leave','$type','$rtype','$nic')");
        //mysqli_query($server, "update attleave set attend='$val' WHERE employee_nic='$NIC' and date='$DATE' ");

    //echo 'Hri mcn';

?>