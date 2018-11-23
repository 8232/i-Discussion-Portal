<?php
session_start();
$name= "";
$conn = mysqli_connect('localhost','root','root','Users_info');

if(!$conn)
{
	echo "error connecting to database";
}
if(isset($_POST['Submit']))
{
	$email = $_POST['email'];
	$_SESSION['email'] = $email;
	$pass = $_POST['pass'];
	//if($email==' ' or $email=='' or $pass==' ' or $pass==''){
	//	echo '<script type="text/javascript"> window.location.href = "login.php";</script>';
	//}
	$result = mysqli_query($conn,"SELECT email FROM users where email='$email'");
	$user_data = mysqli_fetch_row($result);
	if(in_array($email,$user_data)){
		$result1 = mysqli_query($conn,"SELECT pass FROM users WHERE email='$email'");
		$user_pass=mysqli_fetch_row($result1);
		if(in_array($pass,$user_pass)){
			$result2 = mysqli_query($conn,"SELECT fname FROM users WHERE email='$email'");
			$name=mysqli_fetch_row($result2);
			echo '<script type="text/javascript">;window.location.href = "user_console.php";</script>';
			$_SESSION['name']= implode(" ",$name);
		}	
		else{
			echo '<script type="text/javascript"> alert("Incorrect Password!"); window.location.href = "login.php";</script>';
		}
	}
	else{
		echo '<script type="text/javascript"> alert("Sorry! This email id is not registered."); window.location.href = "login.php";</script>';
	}
}
?>