<?php 
	include_once 'config.php';
	
	if(isset($_POST['update']))
	{
		$userid = $_POST['userid'];
		$uname = $_POST["username"];
		$fname = $_POST["first"]; 
		$lname = $_POST["last"];
		$gfname = $_POST["gfirst"];
		$glname = $_POST["glast"];
		$gemail = $_POST["email"];
		
		$result = mysqli_query($conn, "UPDATE userdetails SET username='$uname',firstName='$fname',lastname='$lname',pFirstName='$gfname',pLastName='$glname',email='$gemail' WHERE userid='$userid'");
	}
?>

<?php

	$userid = $_GET['userid'];
	
	$result = mysqli_query($conn, "SELECT * FROM userdetails WHERE userid=$userid");
	
	while($row = mysqli_fetch_array($result))
	{
		
		$uname = $row["username"];
		$fname = $row["first"]; 
		$lname = $row["last"];
		$gfname = $row["gfirst"];
		$glname = $row["glast"];
		$gemail = $row["email"];
	}
?>