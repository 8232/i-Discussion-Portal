<?php

$conn = mysqli_connect('localhost','root','root','Users_info');
if(!$conn)
{
	echo "error connecting to database";
}
if(isset($_POST['Submit']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];

$result = mysqli_query($conn,"SELECT email FROM users where email='$email'");
$user_data = mysqli_fetch_row($result);
if(in_array($email,$user_data)){
	echo '<script type="text/javascript"> alert("This email id is already registered. Register with a different email or login."); window.location.href = "signupform.php";</script>';
	}
else if($pass!=$cpass){
	echo '<script type="text/javascript"> alert("Passwords did not match!"); window.location.href = "signupform.php";</script>';
}
else{
		$qry = "INSERT INTO users(fname,lname,email,pass) VALUES ('$fname','$lname','$email','$pass')";
		mysqli_query($conn,$qry);
		echo '<script type="text/javascript"> alert("Thank you for registration. Login to your account now."); window.location.href = "login.php";</script>';
	}
}
?>

