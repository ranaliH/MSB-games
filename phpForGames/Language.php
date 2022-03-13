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
	<link rel="icon" href="images/msb.png" type="image/gif" sizes="50">
	<title>MSB kids</title>
	
	<link rel="stylesheet" type="text/css" href="../styles/header&footer.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/Language.css"/>
	<link rel="stylesheet" type="text/css" href="../styles/dropdown.css"/>
    
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
			<li class="header"><a href="home.php">Home</a></li>
			<li class="header"><a href="skills.php">Games</a></li>
			<li class="header"><a href="help.php">Help</a></li>
			<li class="header"><a href="buygames.php"><div id="icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></div></a></li>
			
		</ul>
</header>
<div id="backgroundpic">
<br>
<center><h1 class="topic">Language</h1></center>
<br><br>
<center><h2 class="topic2">A new language is a new life!</h2></center>
<br><br>
<center><img class="img1" src="../images/Language/Lgame1.png" alt="Fox in socks"></center>

<div class="submenu"> 
<img class="subimg" src="../images/Language/Lgame2.png" alt="Sinhala"> <br><br><br>
<img class="subimg" src="../images/Language/Lgame3.jpg" alt="word up"> <br><br><br>
<img class="subimg" src="../images/Language/Lgame4.jpg" alt="Hangman"> <br>
<h4><a href="https://www.sliit.lk" style="font-family: Kristen ITC";>Show all...</a></h4>
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
<img class="subgame1" src="../images/Language/Ltest1.jpg" alt="German" > <br><br>
<h3 style="font-family: Kristen ITC";> Lets put your German language skills to the test!</h3> <br><br>
</div>

<div class="adv">
<img class="ad1"src="../images/Language/Lad3.jpg" alt="Chips";>
</div>
<div class="adv1">
<img class="ad2"src="../images/Language/lad4.jpg" alt="Detergent";>
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