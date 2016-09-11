<?php
include 'datetime.php';

include 'connection.php';

$res = mysqli_query($server, "SELECT  employee.Nic,
  employee.FirstName,
  employee.LastName,
  attleave.Attend,
  attleave.ReqType
FROM employee
  INNER JOIN attleave
    ON attleave.Employee_Nic = employee.Nic where attleave.date = '$date3'");
$res1 = mysqli_query($server, "SELECT * FROM employee");
//$res2 = mysqli_query($server, "SELECT * FROM attleave");


while ($row1 = mysqli_fetch_array($res1)) {
    $nic=  $row1[0];
    mysqli_query($server,"insert into attleave(date,employee_nic) values ('$date3','$nic')");  
}

?>

<html>

    <header>
        <title>Atendence</title>
    </header>
    <center>
        <h1>+HoMS</h1>
        <h5 ><?php echo $date2 ?></h5>
        <h5 id="date" style="display: none"><?php echo $date3 ?></h5>
        <h5 style="display: none"><?php echo $date4 ?></h5>
        <body>
            <!--<form action="viewArp.php" method="post">-->
                <table border="1" style="width: 90%">
                    <tr>
                        <td style="background-color: appworkspace">ID</td>
                        <td style="background-color: appworkspace">Name</td>
                        <td style="width: 8%; background-color: blanchedalmond">Mon</td>
                        <td style="width: 8%; background-color: appworkspace">Tue</td>
                        <td style="width: 8%; background-color: blanchedalmond">Wed</td>
                        <td style="width: 8%; background-color: appworkspace">Thu</td>
                        <td style="width: 8%; background-color: blanchedalmond">Fri</td>
                        <td style="width: 8%; background-color: appworkspace">Sat</td>

                            <td style="width: 8%; background-color: blanchedalmond">Sun</td>

                    </tr>

                    <tr>
                        <?php while ($row = mysqli_fetch_array($res)):; ?>
                                <td style="width: 15%; background-color: aquamarine"><input type="text" value="<?php echo $row['Nic']; ?>"  id="NIC" readonly></td>
                                <td style="background-color: aquamarine"><input type="text" value="<?php echo $row['FirstName'] . " " . $row['LastName']; ?>" name="name"</td>

                            <?php if ($date4 == "Monday") { ?>

                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="mon" <?php if($row[3]==1){ echo 'Checked';}?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"> </td>  
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="tue" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="wed" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="thu" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="fri" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="sat" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="sun" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>

                            
                            <?php } else if($date4 == "Tuesday") { ?>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="mon" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>  
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="tue" <?php if($row[3]==1){ echo 'Checked';}?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="wed" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="thu" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="fri" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="sat" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="sun" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>

                            <?php } else if($date4 == "Wednesday") { ?>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="mon" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>  
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="tue" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="wed" <?php if($row[3]==1){ echo 'Checked';}?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="thu" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="fri" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="sat" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="sun" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>

                            <?php } else if($date4 == "Thursday") { ?>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="mon" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>  
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="tue" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="wed" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="thu" <?php if($row[3]==1){ echo 'Checked';}?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="fri" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="sat" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="sun" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>

                            <?php } else if($date4 == "Friday") { ?>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="mon" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>  
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="tue" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="wed" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="thu" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="fri" <?php if($row[3]==1){ echo 'Checked';}?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="sat" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="sun" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>

                            <?php } else if($date4 == "Saturday") { ?>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="mon" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>  
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="tue" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="wed" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="thu" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="fri" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="sat" <?php if($row[3]==1){ echo 'Checked';}?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="sun" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>

                            <?php } else if($date4 == "Sunday") { ?>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="mon" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>  
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="tue" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="wed" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="thu" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="fri" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: appworkspace">
                                    <input type="checkbox" name="sat" style="display: none" onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)"></td>
                                <td style="width: 8%; background-color: blanchedalmond">
                                    <input type="checkbox" name="sun" <?php if($row[3]==1){ echo 'Checked';}?> onclick="saveAttends('<?php echo $row[0]; ?>', document.getElementById('date').innerHTML, this.checked)" ></td>

                             
                            <?php } ?>



                        </tr>
                    <?php endwhile; ?>

                </table>

            <button onclick="loaddata()">Submit</button> 
            <!--<input type="checkbox" name="sun" checked >-->

<!--          -->
            <!--</form>-->
            
    </center>
</body>

<script type="text/javascript">

    var obj;
    var obj1;
    

    function checkBrowser() {
        if (window.XMLHttpRequest) {
            obj = new XMLHttpRequest();
        } else {
            obj = new ActiveXobject("Microfoft.ActiveXobject");
        }
    }
    function loaddata(){
         checkBrowser();
            obj.onreadystatechange = function() {
                
                        
                if (obj.readyState === 4 && obj.status === 200) {

                       
                   // if (obj.responseText == "Hri mcn") {

                         alert(obj.responseText);
//                    } else {
//                        alert("Not Added!!");
//                    }


                }
            };
            obj.open("POST", "viewArp.php", true);
            obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            obj.send();

        
    }

    function saveAttends(name, date, attend) {
        try {
                
            checkBrowser();
            obj.onreadystatechange = function() {
                
                        
                if (obj.readyState === 4 && obj.status === 200) {

                       
                    if (obj.responseText == "Hri mcn") {

                         alert(obj.responseText);
                    } else {
                        alert("Not Added!!");
                    }


                }
            };
            obj.open("POST", "saveattends.php", true);
            obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            obj.send("nic=" + name + "&date=" + date + "&attend=" + attend);



        } catch (err) {
        }}
   

</script>

</html>