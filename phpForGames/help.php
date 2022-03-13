<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?>


<!DOCTYPE html>
<html>
<head>

	<title>MSB kids - Account</title>
	
	<link rel="stylesheet" type="text/css" href="../styles/header&footer.css"/>
	<link rel="stylesheet" type="text/css" href="../styles/help.css"/>
	<link rel="stylesheet" type="text/css" href="../styles/dropdown.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
	<style>
		#backgroundpic{
			background-image: url("../images/backgroundpic.gif");
			background-size: 100%;
		}
	</style>

</head>

<body>
<header class="header">
		<img src="../images/msb.png" alt="MSB" width="200.1" height="87.3" 
			 <img><i>Making learning more fun and enjoyable...</i>
			<p id="name" style="color:black;"><?=$_SESSION['name']?></p>
 
      <div class="dropdown" style="float:right;">
        <img id="profilePic" src="../images/phs.png" width="40px" height="40px"></br>
        <div class="dropdown-content">
        <a href="useraccount.php">Profile</a>
         <a href="logout.php">Log-out</a>
      </div>
      </div>

		<ul class="header">
			<li class="header"><a href="home.php">Home</a></li>
			<li class="header"><a href="skills.php">Games</a></li>
			<li class="header"><a href="help.php">Help</a></li>
			<li class="header"><a href="buygames.php"><div id="icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></div></a></li>
			
		</ul>
</header>
	
	

	<div id="backgroundpic">
	<br><br>
	
		<center>
		<div class="rectangle1">
			<h2><b>How Can We Help?</b></h2>
		</div>
		<br><br>
		<h3><u>Help Topics</u></h3>
		<div class="rectangle2">
			<h2><b>Your Account</b></h2>
		</div>
		<br><br>
		<div class="rectangle3">
			<h2><b>Payments</b></h2>
		</div>
		<br><br>	
		
		<div class="rectangle4">
			<h2><b>Fix a problem</b></h2>
		</div>
		<br><br>
				
		<div class="rectangle5">
			<h2><b>Safety and Security</b></h2>
		</div>
		<br><br>
				
		<div class="rectangle6">
			<h2><b>Developers</b></h2>
		</div>
		<br><br>
    </center>
	<br><br><br><br>
	<center>
	<footer class="footer">
		<ul class="footer">
			<li class="footer"><a href="#">Private Policy</a></li>
			<li class="footer"><a href="#">About us</a></li>
			<li class="footer"><a href="contactus.php">Contact</a></li>
			<li class="footer"><a href="#">Download</a></li>
			<li class="footer"><a href="#">Terms and Conditions</a></li>
		</ul><br>

		<hr id="line">
		<h6>© MSB Games</h6>
		
	</footer>
	</center>

</body>
</html>