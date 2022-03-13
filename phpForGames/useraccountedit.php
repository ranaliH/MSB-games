<?php

session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?>

<?php 
	include_once 'config.php';
?>

<?php

	/*$It_id = $_GET["Item_id"];*/
	$userid = isset($_GET["userid"]);
	
	$result = mysqli_query($conn, "SELECT * FROM userdetails WHERE userid='$userid'");
	
	while($row = mysqli_fetch_array($result))
	{
		$uname = $row["username"];
		$fname = $row["firstName"]; 
		$lname = $row["lastname"];
		$gfname = $row["pFirstName"];
		$glname = $row["pLastName"];
		$gemail = $row["email"];
	}
?>
	
<?php
	
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
		
		header('Location:useraccountedit.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="../images/home page/msb.png" type="img/gif" size="50*50">
	<title>MSB kids - Edit user details</title>
	
	<link rel="stylesheet" type="text/css" href="../styles/header&footer.css">
	<link rel="stylesheet" type="text/css" href="../styles/useraccountedit.css">
	<link rel="stylesheet" type="text/css" href="../styles/dropdown.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script src="../js/useraccountedit.js"></script>
   
	<style>
		#backgroundpic{
			background-image: url("images/home page/backgroundpic.gif");
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
       
	<table border="2" width="98%">
		<tr>
			<th class="col1"> User Name </th>
			<th class="col2"> First Name </th>
			<th class="col2"> Last Name  </th>
			<th class="col2"> Gurdian First Name </th>
			<th class="col2"> Gurdian Last Nmae </th>
			<th class="col2"> Gurdian Email  </th>
			<th class="col2"> Edit  </th>
			
			
		</tr>
		<?php
		$sql = "SElECT * FROM userdetails";
		/*$result = $conn->query($sql);*/
		$result = mysqli_query($conn,$sql);
		
		if($result->num_rows>0){
			
			while($row=$result->fetch_assoc()){
				/*echo "<tr><td>".$row["Item_id"]."</td><td>".$row["Item_name"]."</td><td>".$row["Item_code"]."</td><td>".$row["Item_description"]."</td><td>".$row["Price"]."</td><td>".$row["Quantity"]."</td></tr>";
				echo "<td><a href='update.php?'Item_id =$row['Item_id ']> Edit </a> </td>";
				echo "<tr>";*/
				echo "<tr>";
				echo "<td>".$row["username"]."</td>";
				echo "<td>".$row["firstName"]."</td>";
				echo "<td>".$row["lastname"]."</td>";
				echo "<td>".$row["pFirstName"]."</td>";
				echo "<td>".$row["pLastName"]."</td>";
				echo "<td>".$row["email"]."</td>";
				echo "<td><a href='useraccountedit.php?userid=$row[userid]'> Edit </a> </td>";
				echo "</tr>";
				
				
				
			}
		}
		else{
			echo "0 results";
		}
		
		echo "</table>";
		
		$conn->close();
		
		?>

<br><br><br><br><br>

<center><h1> Edit user details  </h1></center>
<br><br>

<!--<div class="update_form">-->
	<form  class="form-style-9" method="POST" action="useraccountedit.php">
		<table border="0px">
			<tr>
				<td>Username</td>
				<td><input type="text" name="name" class="f1 f11 f12"  value=<?php echo $username;?> ></td>
			</tr>
			<tr>
				<td>First name</td>
				<td><input type="text" name="first" class="f1 f11 f12"   value=<?php echo $firstName;?>></td>
			</tr>
			<tr>
				<td>Last name</td>
				<td><input type="text" name="last" class="f1 f11 f12"   value=<?php echo $lastname;?>></td>
			</tr>
			<tr>
				<td>G_First name</td>
				<td><input type="text" name="gfirst" class="f1 f11 f12"   value=<?php echo $pFirstName;?>></td>
			</tr>
			<tr>
				<td>G_Last name</td>
				<td><input type="text" name="glast" class="f1 f11 f12"   value=<?php echo $pLastName;?>></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" class="f1 f11 f12"   value=<?php echo $email;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="userid"  value=<?php echo $userid?>></td>
				<td><input type="submit" name="update" value="update" ></td>
			</tr>	
		</table>
		</form>
		
    
	  

	</div>
    <br><br>
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
