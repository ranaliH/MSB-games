<?php
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>

	<title>MSB kids - Contact Us</title>
	
	<link rel="stylesheet" type="text/css" href="../styles/header&footer.css"/>
	<link rel="stylesheet" type="text/css" href="../styles/progressreport.css"/>
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
	<br><br>
	
	<div id="backgroundpic">
	
	<center><h1 style="font-family: arial; font-size: 50px; color:brown;">Contact Us</h1>
	<p style="font-family: arial; font-size: 40px"><b>Email : msbkids@gmail.com<br>
       Contact : +94 76 8523525	</b></p><br><hr>
	<h1>Connect with us via: </h1><br>
		 <a href="#"><img src="../images/instagram.png" alt="Instagram" width="100" height="60"></a>
	     <a href="#"><img src="../images/twitter.png" alt="Twitter" width="100" height="60"></a>
	     <a href="#"><img src="../images/facebook.png" alt="Facebook" width="100" height="60"></a></center>
	  
	<center>
	<footer class="footer">
		<ul class="footer">
			<li class="footer"><a href="#">Private Policy</a></li>
			<li class="footer"><a href="#">About us</a></li>
			<li class="footer"><a href="contactus.html">Contact</a></li>
			<li class="footer"><a href="#">Download</a></li>
			<li class="footer"><a href="#">Terms and Conditions</a></li>
		</ul><br>

		<hr id="line">
		<h6>© MSB Games</h6>
		
	</footer>
	</center>

</body>
</html>