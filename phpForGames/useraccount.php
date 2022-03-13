<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?>
<?php
   
   $db = mysqli_connect("localhost", "root", "", "onlinegames"); 
   
   $sql = "SELECT u.noOfGames, u.score, u.Level, u.bonus FROM userdetails s, userreport u WHERE s.userid=u.userid AND s.username='".$_SESSION['name']."'";
   $result = mysqli_query($db, $sql);
   $resultcheck = mysqli_num_rows($result);

   
?>

<!DOCTYPE html>
<html>
<head>

	<title>MSB kids - Account</title>
	
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
 
 <button style="float:right; width:10%;background-color: #4CAF50;color: white;cursor: pointer;"><a href="useraccountedit.php">Edit Profile</a></button>

	<div class="profile-main">
		<div class="profile-header">
			<div class="user-detail">
				<img style="padding-left:30px; width:15%; height:15%;" src="../images/phs.png">
				
				<h2 style="padding-left:60px; font-family: Rockwell Extra Bold " ><?=$_SESSION['name']?></h2>
							
				</div>
				</div>
			</div>
 
	<table width="90%" height="90%" id="tab">

	 <tr>
      <td>	 
	   <center><p id="month">Monthly progress report</p></center>

	   <ol class="progress">
	    <li>No of games played</li><br>
		 <div class="olt">
		   <?php
               if($resultcheck > 0)
               {
	              if($row= mysqli_fetch_assoc($result))
	              {
		             echo "<center>"."<h1>".$row['noOfGames']."</h1>"."</center>";
	               }
               }
             ?>
		 </div><br>
		<li>Total score</li><br>
		 <div class="olt">
		 <?php
               if($resultcheck > 0)
               {
	              
		             echo "<center>"."<h1>".$row['score']."</h1>"."</center>";
	               
               }
             ?>
		 </div><br>
		<li>Level</li><br>
		 <div class="olt">
		  <?php
               if($resultcheck > 0)
               {
	              
	             
		             echo "<center>"."<h1>".$row['Level']."</h1>"."</center>";
	               
               }
             ?>
		 </div><br>
		<li>Bonus earned for the level</li><br>
		 <div class="olt">
		  <?php
               if($resultcheck > 0)
               {
	              
		             echo "<center>"."<h1>".$row['bonus']."</h1>"."</center>";
	                              }
             ?>
		 </div><br>
	  </td>	
     </tr>
	</table>
         <br><br>
				

<
</div>

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