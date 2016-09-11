<?php
include 'datetime.php';

include 'connection.php';

$res = mysqli_query($server, "SELECT
  employee.Nic,
  employee.FirstName,
  employee.LastName,
  attleave.Attend
FROM attleave
  INNER JOIN employee
    ON attleave.Employee_Nic = employee.Nic where attleave.date = '$date3' ");//and attendence =
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Leave</title>
    </head>
    <body>
    <center>
        <h1>+HoMS</h1>
        <h5><?php echo $date2 ?></h5>
        <form method="post" action="viewLrp.php">
            <table border="1" style="width: 90%">
                <tr>
                    <td style="background-color: aquamarine">ID</td>
                    <td style="background-color: aquamarine">Name</td>
                    <td style="width: 12%; background-color: blanchedalmond">Attendence</td>
                    <td style="width: 12%; background-color: appworkspace">Leave</td>
                    <td style="width: 12%; background-color: blanchedalmond">Leave Type</td>
                    <td style="width: 12%; background-color: appworkspace">Req. Letter type</td>

                </tr>
                <?php while ($row = mysqli_fetch_array($res)): ?>

                    <tr>
                        <td style="background-color: aquamarine" id="nic"><?php echo $row[0]; ?></td>
                        <td style="background-color: aquamarine"><?php echo $row[1] . " " . $row[2]; ?></td>
                        <td style="width: 12%; background-color: blanchedalmond"><?php echo $row[3] ?></td>
                        <td style="width: 12%; background-color: appworkspace " id="a" >
                            <select name="Leave" id="lv">
                                
                                <option value="n">N</option>
                                <option value="y">Y</option>
                            </select></td>
                           
                        <td style="width: 12%; background-color: blanchedalmond"><select name="LvType" id="lvt">
                                <option>none</option>
                                <option>Short Leave</option>
                                <option>Mediacal Leave</option>
                            </select></td>
                            
                            <td style="width: 12%; background-color: appworkspace"><select name="ReqType" onchange="saveLeave(document.getElementById('lv').value, document.getElementById('lvt').value, this.value, '<?php echo $row[0]; ?>')">
                                <option>Select type</option>
                                <option>Letter</option>
                                <option>Fax</option>
                                <option>Tele-Mail</option>
                                <option>Phone Call</option>
                                <option>none</option>
                                
                            </select></td>
                    </tr>

                <?php endwhile; ?>

            </table><br><br>
            
            <input type="submit" value="View Report"><br><br>
        </form>
    </center>
</body>

<script type="text/javascript">

    var obj;

    function checkBrowser() {
        if (window.XMLHttpRequest) {
            obj = new XMLHttpRequest();
        } else {
            obj = new ActiveXobject("Microfoft.ActiveXobject");
        }
    }

    function saveLeave(leave, type, reqType, nic) {
        try {

            checkBrowser();
            obj.onreadystatechange = function() {

                if (obj.readyState === 4 && obj.status === 200) {


                        alert(obj.responseText);
//                    if (obj.responseText == "Hri mcn") {
//
//                    } else {
//                        alert("Not Added!!")
//                    }


                }
            };
            obj.open("POST", "saveLeave.php", true);
            obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            obj.send("leave=" + leave + "&type=" + type + "&rtype=" + reqType + "&nic=" + nic);



        } catch (err) {
        }
    }

</script>


</html>
