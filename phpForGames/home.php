<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<title>MSBkids</title>
<link rel="stylesheet" type="text/css" href="../styles/header&footer.css"/>
<link rel="stylesheet" type="text/css" href="../styles/slider.css"/>
<link rel="stylesheet" type="text/css" href="../styles/layout.css"/>
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
<br>
		<div class="slideshow-container">

			<div class="mySlides fade">
			  <div class="numbertext">1 / 5</div>
			  <img src="../images/elmo.jpg" style="width:90%">
			  <div class="text"></div>
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">2 / 5</div>
			  <img src="../images/arthur.jpg" style="width:90%">
			  <div class="text"></div>
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">3 / 5</div>
			  <img src="../images/mathland.jpg" style="width:90%">
			  <div class="text"></div>
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">4 / 5</div>
			  <img src="../images/dinosaur.jpg" style="width:90%">
			  <div class="text"></div>
			</div>
			
			<div class="mySlides fade">
			  <div class="numbertext">5 / 5</div>
			  <img src="../images/elmo2.jpg" style="width:90%">
			  <div class="text"></div>
			</div>
		
		</div>
		<br>

		<div style="text-align:center">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span>
          <span class="dot"></span>		  
		</div>
		
		<br>
		<br>
  <div class="row">
 
		<div class="column middle">
				
				<div class="container" style="padding-left:60px">
				  <h2 style="font-family:Sans-serif; color:#6a5acd;">Now Trending...</h2>
				  <img src="../images/space.jpg">
				  <button class="btn">Play</button>
				</div>
			<br>
			<br>
				<div class="container" style="padding-left:60px">
				  <img src="../images/agent.jpg">
				  <button class="btn">Play</button>
				</div>		
				
			<br>
			<br>
			    <div class="container" style="padding-left:60px">
				  <img src="../images/thumbnail.jpg">
				  <button class="btn">Play</button>
				</div>		
				
			<br>
			<br>
				<div class="container" style="padding-left:60px">
				  <h2>&nbsp ! Seasonal Competition !</h2>
				  <a href="News.html"><img src="../images/competition.jpg"></a>
				</div>
			<br>
            <br>			
				
		 </div>
		     <br>
			 <br>
			 <br>
			 <div class="column side">
			 <a href="https://www.mcdelivery.lk/lk/"><img style="width:90%;" src="../images/pokemon.jpg"></a>
			 
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
			 <div class="column side">
			 
			 <a href="https://www.lego.com/en-us"><img style="width:250%;" src="../images/lego2.jpg"></a>
			 <br>
			 <br>
			 <br>
			 <br>
			 <a href="https://www.baskinrobbins.com/en"><img style="width:250%;" src="../images/br.jpg"></a>
			 
		     </div>
		 
  </div>

		<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
		  }
		  slideIndex++;
		  if (slideIndex > slides.length) {slideIndex = 1}    
		  for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		  setTimeout(showSlides, 5000); 
		}
		</script>


</div>
	<<<center>
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