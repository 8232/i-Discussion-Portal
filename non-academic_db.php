<?php
include 'login_db.php';
date_default_timezone_set("Asia/Calcutta"); 
$conn = mysqli_connect('localhost','root','root','Users_info');
if(!$conn)
{
	echo "error connecting to database";
}
if(isset($_POST['Submit']))
{
	$name = $_SESSION['name'];
	$time= date('Y-m-d H:i:s');
	$msg= $_POST['msg'];
	$qry = "INSERT INTO queries(name,time,query) VALUES ('$name','$time','$msg')";
	mysqli_query($conn,$qry);
	header("LOCATION: non-academic.php");
}
?>

