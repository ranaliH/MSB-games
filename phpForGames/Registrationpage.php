<!DOCTYPE html>
<html>
<head>

	<title>MSB kids - Registration page</title>
	
	<link rel="stylesheet" type="text/css" href="../styles/header&footer.css">
	<link rel="stylesheet" type="text/css" href="../styles/registration.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script src="../js/registration.js"></script>
   
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
		<h2><i>Making learning more fun and enjoyable..</i></h2>
		<a class="ls" href="Registrationpage.php">| Sign-up</a> 
		 <a class="ls" href="login.html">Login &nbsp<p></p></a>

		<ul class="header">
			<li class="header"><a href="Home page.html">Home</a></li>
			<li class="header"><a href="skills.html">Games</a></li>
			<li class="header"><a href="help.html">Help</a></li>
			<li class="header"><a href="login.html"><div id="icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></div></a></li>
			
		</ul>
	</header>
	
	<div id="backgroundpic">
	<br><br>
	 <div>

		  <form id="regForm" action="Registration.php" name="RegForm" method="post" border="1" class="forform" onsubmit="return ValidateReg()">
		   
           <center><p class="signup"><b>Sign up</b></p></center>
		  
		    <p class="details"><b>New user details</b></p><hr color=black width="40%" align="left">
		     
		     <label class="fill">Username</label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<label class="fill">Date of Birth</label><br>
			  <input type="text" name="name" maxlength="10" placeholder="Username" > &nbsp; <input type="date" name="dob" placeholder="Date of Birth"><br><br>
			 
			 <label class="fill">First name</label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <label class="fill">Create password</label><br>
              <input type="text" name="first" maxlength="20" placeholder="First Name" > &nbsp;  <input type="password" placeholder="Create password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" > <div id="passwordError"></div><br><br>
			 
			 <label class="fill">Last name</label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<label class="fill">Re-enter password</label><br>
              <input type="text" name="Last" maxlength="20" placeholder="Last Name"> &nbsp; <input type="password" placeholder="Re-enter password" name="pswr" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"><br><br>
			
			  
		    <p class="details"><b>Gaurdian details</b></p><hr color=black width="40%" align="left">
			
			 <label class="fill">First name</label><br>
			  <input type="text" name="gFirst" maxlength="20" placeholder="First Name" ><br><br>
			  
			 <label class="fill">Last name</label><br>
			  <input type="text" name="gLast" maxlength="20" placeholder="Last Name" ><br><br>
			 
			 <label class="fill">Email</label><br>
			  <input type="email" name="email" placeholder="abc@gmail.com" ><br>
			  
			 <input type="checkbox" name="E" value="1" checked><label class="fill">Send confirmation email</label><hr color=black width="40%"><br>
			 
			 <center>
			   <input type="submit" name="create" value="Create account" style="background-color:#A61022"><br><br>
			 </center>
		 </form>
		</div>
		<br><br>
	
	
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
