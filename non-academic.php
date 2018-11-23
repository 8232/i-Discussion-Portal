<?php include 'non-academic_db.php' ?>

<html>
<head>
<title>Non-Academic Queries</title>
<style type="text/css">
#qbox {
	position: fixed;
	bottom: 50%;
    left: 45%;
	
}
</style>
<script>

function postquery() {
	if(form1.msg.value == '') {
		alert("Query box can't be blank.");
		return;
	}
	//3var msg = form1.msg.value;
}	

</script>


</head>
<body>
<?php 
	$result = mysqli_query($conn,"SELECT * FROM queries");
	while($row = mysqli_fetch_array($result))
	{
		echo "<p>" . $row['id'] . "</p>";
		echo "<h2>" . $row['name'] . "</h2>";
		echo "<p>" . $row['time'] . "</p>";
		echo "<p>" . $row['query'] . "</p>";
	}
?>
<div id="qbox">
<form name="form1" action="non-academic_db.php" method="POST">
Your Query: <br />
<textarea name="msg"></textarea><br />
<button name= "Submit"onclick="postquery()"> POST</button>
</form>
<a href="user_console.php">BACK</a>
</div>
</body>