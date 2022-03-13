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
	<link rel="icon" href="../images/home page/msb.png" type="img/gif" size="50*50">
	<title>MSB kids</title>
    <link rel="stylesheet" type="text/css" href="../styles/dropdown.css">
	<link rel="stylesheet" type="text/css" href="../styles/header&footer.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/iq.css"/>
	
	<script type="text/javascript" src="../js/iq.js"></script>
	
	
    
	<style>
		#backgroundpic{
			background-image: url("../images/home page/backgroundpic.gif");
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

<center><h1 class="topic">  Intelligence Quotient (IQ)</h1></center>
 
<div class="menu">
<button class="button b1" type="button" > Grade 01 </button></br></br>
<button class="button b2" type="button" > Grade 02 </button></br></br>
<button class="button b3" type="button" > Grade 03 </button></br></br>
<button class="button b4" type="button" > Grade 04 </button></br></br>
<button class="button b5" type="button" > Grade 05 </button></br></br>
</div>

<center>
	<p class="mainpara">There are many types of math games, and each kind can help kids to practice diffrent maths skills...</p>
	<br><br>
	<img  src="../images/iq/mgame1.jpg" width="1200px" height="700px"> <br><br><br>

<button class="pbutton1 pbutton" type="button" onclick="loadData('pbutton1')" > Play </button>
</center>

<div class="ad1">
	<img class="imd1" src="../images/maths/ad1.jpg">
</div>

<div class="ad2">
	<img class="imd2" src="../images/maths/ad2.jpg">
</div>
<br><br><br>


<div class="sgames"> 
<h2 style="font-family:kristen ITC";> Grade 01 </h2>
<img class="simg" src="../images/iq/sgame1.jpg" alt="Riddle me" > <br><br><br>
<button class="pbutton1 pbutton" type="button" onclick="loadData('gbutton2')" > Riddle me </button><br><br><br>
<img class="simg" src="../images/iq/sgame2.jpg" alt="Treshure hunt"> <br><br><br>
<button class="pbutton1 pbutton" type="button" onclick="loadData('gbutton3')" > Treasure hunt  </button><br><br><br>
<br>
<h3><a href="https://www.google.com/" style="font-family: Comic Sans MS, cursive, sans-serif;">Show all...</a></h3>
</div>

<div class="sgames1"> 
<h2 style="font-family:kristen ITC";> Grade 02 </h2>
<img class="simg" src="../images/maths/sgame3.jpg" alt="count with us" > <br><br><br>
<button class="pbutton1 pbutton" type="button" onclick="loadData('gbutton4')" > Subtract with us  </button><br><br><br>
<img class="simg" src="../images/maths/sgame4.jpg" alt="count with us"> <br><br><br>
<button class="pbutton1 pbutton" type="button" onclick="loadData('gbutton5')" > Adding is Fun  </button><br><br><br>
<br>
<h3><a href="https://www.google.com/" style="font-family: Comic Sans MS, cursive, sans-serif;">Show all...</a></h3>
</div>

<div class="sgames2"> 
<h2 style="font-family:kristen ITC";> Grade 03 </h2>
<img class="simg" src="../images/maths/sgame5.jpg" alt="count with us" > <br><br><br>
<button class="pbutton1 pbutton" type="button" onclick="loadData('gbutton6')" > First to 100  </button><br><br><br>
<img class="simg" src="../images/maths/sgame6.jpg" alt="count with us"> <br><br><br>
<button class="pbutton1 pbutton" type="button" onclick="loadData('gbutton7')" > Salamander  </button><br><br><br>
<br>
<h3><a href="https://www.google.com/" style="font-family: Comic Sans MS, cursive, sans-serif;">Show all...</a></h3>
</div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div class="gameinfo">
	<center><h1 style="font-family:kristen ITC; background-color:#4d94ff;" >GAME INFO</h1></center>
	<h2><p class="gtext"> Game ID : </p></h2>  
	<h2><p class="gtext" id="gtitle"></p></h2> <h3 style="font-family:kristen ITC; background-color:#4d94ff;"> Clik Image To Start The Game </h3><br>
	<a href="https://www.w3schools.com"><img id="gimg" src="" alt="Game-"></a>
	<p class="gtextp" id="gpara"> </p>
	</div>
<br><br><br><br><br><br>
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
<script>
function loadData(gid){
	if(gid == "gbutton2"){
		document.getElementById("gtitle").innerHTML="Count with us";
		document.getElementById("gimg").src = "../images/maths/sgame1.jpg";
		document.getElementById("gpara").innerHTML="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
	}
	else if(gid == "gbutton3"){
		document.getElementById("gtitle").innerHTML="Divide";
		document.getElementById("gimg").src = "../images/maths/sgame2.jpg";
		document.getElementById("gpara").innerHTML="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";	
	}
	else if(gid == "gbutton4"){
		document.getElementById("gtitle").innerHTML="Subtract with us";
		document.getElementById("gimg").src = "../images/maths/sgame3.jpg";
		document.getElementById("gpara").innerHTML="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";	
	}
	else if(gid == "gbutton5"){
		document.getElementById("gtitle").innerHTML="Adding is Fun";
		document.getElementById("gimg").src = "../images/maths/sgame4.jpg";
		document.getElementById("gpara").innerHTML="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";	
	}
	else if(gid == "gbutton6"){
		document.getElementById("gtitle").innerHTML="First to 100";
		document.getElementById("gimg").src = "../images/maths/sgame5.jpg";
		document.getElementById("gpara").innerHTML="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
	}
	else if(gid == "gbutton7"){
		document.getElementById("gtitle").innerHTML="Salamandar";
		document.getElementById("gimg").src = "../images/maths/sgame6.jpg";
		document.getElementById("gpara").innerHTML="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
	}
	
}
</script>