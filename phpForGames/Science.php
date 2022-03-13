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
	<link rel="icon" href="../images/msb.png" type="image/gif" sizes="50">
	<title>MSB kids</title>
	
	<link rel="stylesheet" type="text/css" href="../styles/header&footer.css"/>
	<link rel="stylesheet" type="text/css" href="../styles/dropdown.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/Science.css"/>
    
	<style>
		#backgroundpic{
			background-image: url("../images/backgroundpic.gif");
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
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
			<<li class="header"><a href="home.php">Home</a></li>
			<li class="header"><a href="skills.php">Games</a></li>
			<li class="header"><a href="help.php">Help</a></li>
			<li class="header"><a href="buygames.php"><div id="icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></div></a></li>
			
		</ul>
</header>
<div id="backgroundpic">
<br>
<center><h1 class="topic">Science</h1></center>
<br><br>
<center><h2 class="topic2">Let's Science!!</h2></center>
<br><br>
<center><img class="img1" src="../images/science/sgame1.jpg" alt="bridge o rama"></center>

<div class="submenu"> 
<img class="subimg" src="../images/science/sgame2.png" alt="bot builder"> <br><br><br>
<img class="subimg" src="../images/science/sgame3.jpg" alt="Dino discovery"> <br><br><br>
<img class="subimg" src="../images/science/sgame4.jpg" alt="Weather surprise"> <br>
<h4><a href="https://www.w3schools.com/" style="font-family: Kristen ITC;">Show all...</a></h4>
</div>

<div class="menu">
<button class="button1 mbutton"> Grade 1 </button> <br>
<button class="button2 mbutton"> Grade 2 </button> <br>
<button class="button3 mbutton"> Grade 3 </button> <br>
<button class="button4 mbutton"> Grade 4 </button> <br>
<button class="button5 mbutton"> Grade 5 </button> <br>
</div>

<!--<div class="playbttn">
<button class="button6"><h4><b>Play</b></h4></button>
</div>-->
<div class="playbttn">
<button class="button6 buttonh"><h4><b>Play</b></h4></button>
</div>
<br><br>
<div class="subgame">
<h2 style="font-family: Kristen ITC";> Latest... </h2> <br><br>
<img class="subgame1" src="../images/science/sgame5.jpg" alt="bot builder" > <br><br>
<h3 style="font-family: Kristen ITC";> Rove around and learn about Mars!! </h3> <br><br>
</div>

<div class="adv">
<img class="ad1"src="../images/science/sad1.jpg" alt="Shoes";>
</div>
<div class="adv1">
<img class="ad2"src="../images/science/sad2.jpg" alt="BTS";>
</div>
<br><br><br>



</div>
  </div>
</div>
	<i></i>

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