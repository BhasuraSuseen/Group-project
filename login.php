<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
</head>
<body>
<h1>Log in</h1>
<form action="" method="post">

    <label for="email">Username</label>
    <input type="text" placeholder="Username" name="username" required>
	  <br>
    <label for="password">Password</label>
    <input type="password"  placeholder="Password" name="password" required>
    <br>

    <input  type="submit" name="submit" value ="Log In" class="button">
      </form>
 <?php

    require "connect.php";


	session_start();
	if(isset($_POST["submit"])){
	$username=$_POST['username'];
	$password=$_POST['password'];


	$sql = "SELECT USERNAME, ADMIN FROM users WHERE USERNAME='".$username."' AND PASSWORD='".$password."'";


	$result = mysqli_query($conn,$sql);
    $count =mysqli_fetch_array($result);
        
        

        if(mysqli_num_rows($result)>0){
            if($count[1]==0 ){
                $_SESSION['username']=$username;
                header("Location: home.php");
		          die();
	      
            }elseif($count[1]==1){
                header("Location: admin.php");
	        }else{
                echo "User not found";
            }
	}else{
            echo "Invalid user name or password"; 
        }
        
    }

	?>
</body>
</html>