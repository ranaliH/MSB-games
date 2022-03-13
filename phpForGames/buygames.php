<!DOCTYPE html>

<?php

session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?>
<html>
<head>

	<title>MSB kids - Store</title>
	
	<link rel="stylesheet" type="text/css" href="../styles/header&footer.css"/>
	<link rel="stylesheet" type="text/css" href="../styles/buygames.css"/>
	<link rel="stylesheet" type="text/css" href="../styles/dropdown.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script src ="../js/buygames.js"></script>

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

	<br><br>
	<div><a href="#shoppingCart" id="redirect"><button class="cart">View Cart</button></a></div>
	
	<center>
	<div class="rectangle1">
		<div class="images"><img id="image" src="../images/pic6.png"></div><div id="para">
		<p><h1>Trending !!!</h1></p>
		</div>
		<div id="store"><b>MSB Kids Store</b></div>
		<div id="game"><p><b>Toopy Game Box</b></p></div>
		<div id="ratings"><span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span></div>
		<div id="price"><p>$25</p></div>

	<button class="open-button" onclick="openForm()"><b>BUY NOW</b></button>

	<div class="form-popup" id="myForm">
	  <form  class="form-container">
		<h2>Buy Now from MSB kids</h2>

		<label for="email"><b>Credit Card Number:</b></label>
		<input type="text" placeholder="Enter Card Number" name="email" pattern="[0-9]{12}" required><br>

		<label for="psw"><b>CVC:</b></label><br>
		<input type="password" placeholder="Enter CVC" name="psw" pattern="[0-9]{3,4}" required>

		<button type="submit" class="btn" >Pay</button>
		<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
	  </form>
	</div>
	
	</div>
	
	<br><br>
	<fieldset class="rectangle2">
    <legend><h2>Language</h2></legend>
	<div>
		<img id="pice1" src="../images/pice1.jpg">
		<img id="pice2" src="../images/pice2.jpg">
		<img id="pice3" src="../images/pice3.jpg">
		<img id="pice4" src="../images/pice4.jpg">
		<img id="pice5" src="../images/pice5.png">
		<img id="pice6" src="../images/pice6.png">
		
		<br>
		<div><a href="#redirect"><button class="button" id="e1" onclick="buy('e1')">Buy</button></a></div>
		<div><a href="#redirect"><button class="button" id="e3" onclick="buy('e3')">Buy</button></button></a></div>
		<div><a href="#redirect"><button class="button" id="e5" onclick="buy('e5')">Buy</button></button></a></div>
		<div><a href="#redirect"><button class="button" id="e7" onclick="buy('e7')">Buy</button></button></a></div>
		<div><a href="#redirect"><button class="button" id="e9" onclick="buy('e9')">Buy</button></button></a></div>
		<div><a href="#redirect"><button class="button" id="e11" onclick="buy('e11')">Buy</button></button></a></div>
		
		<form method="POST" action="">
		
		<button class="button" id="e2"  name="L001" onclick="addToCart()">Add to cart</button>
		<button class="button" id="e4"  name="L002" onclick="addToCart()">Add to cart</button>
		<button class="button" id="e6"  name="L003" onclick="addToCart()">Add to cart</button>
		<button class="button" id="e8"  name="L004" onclick="addToCart()">Add to cart</button>
		<button class="button" id="e10" name="L005" onclick="addToCart()">Add to cart</button>
		<button class="button" id="e12" name="L006" onclick="addToCart()">Add to cart</button>
		
		</form>
		
	</div></fieldset>
	<br><br>
	
	<fieldset class="rectangle3">
    <legend><h2>Science</h2></legend>
	<div>
		<img id="pics1" src="../images/pics1.jpg">
		<img id="pics2" src="../images/pics2.jpg">
		<img id="pics3" src="../images/pics3.jpg">
		<img id="pics4" src="../images/pics4.jpg">
		<img id="pics5" src="../images/pics5.jpg">
		<img id="pics6" src="../images/pics6.jpg">
		
		<br>
		<div><a href="#redirect"><button class="button" id="s1" onclick="buy('s1')">Buy</button></a></div>
		<div><a href="#redirect"><button class="button" id="s3" onclick="buy('s3')">Buy</button></a></div>
		<div><a href="#redirect"><button class="button" id="s5" onclick="buy('s5')">Buy</button></a></div>
		<div><a href="#redirect"><button class="button" id="s7" onclick="buy('s7')">Buy</button></a></div>
		<div><a href="#redirect"><button class="button" id="s9" onclick="buy('s9')">Buy</button></a></div>
		<div><a href="#redirect"><button class="button" id="s11" onclick="buy('s11')">Buy</button></a></div>
		
		<form method="POST" action="">
		
		<button class="button" id="s2" name="S001" onclick="addToCart()">Add to cart</button>
		<button class="button" id="s4" name="S002" onclick="addToCart()">Add to cart</button>
		<button class="button" id="s6" name="S003" onclick="addToCart()">Add to cart</button>
		<button class="button" id="s8" name="S004" onclick="addToCart()">Add to cart</button>
		<button class="button" id="s10" name="S005" onclick="addToCart()">Add to cart</button>
		<button class="button" id="s12" name="S006" onclick="addToCart()">Add to cart</button>
		
		</form>
		
	</div></fieldset>
	<br><br>
	
	<fieldset class="rectangle4">
    <legend><h2>Math</h2></legend>
	<div>
		<img id="picm1" src="../images/picm1.jpg">
		<img id="picm2" src="../images/picm2.jpg">
		<img id="picm3" src="../images/picm3.png">
		<img id="picm4" src="../images/picm4.jpg">
		<img id="picm5" src="../images/picm5.jpg">
		<img id="picm6" src="../images/picm6.jpg">
		
		<br>
		<div><a href="#redirect"><button class="button" id="m1" onclick="buy('m1')">Buy</button></a></div>
		<div><a href="#redirect"><button class="button" id="m3" onclick="buy('m3')">Buy</button></a></div>
		<div><a href="#redirect"><button class="button" id="m5" onclick="buy('m5')">Buy</button></a></div>
		<div><a href="#redirect"><button class="button" id="m7" onclick="buy('m7')">Buy</button></a></div>
		<div><a href="#redirect"><button class="button" id="m9" onclick="buy('m9')">Buy</button></a></div>
		<div><a href="#redirect"><button class="button" id="m11" onclick="buy('m11')">Buy</button></a></div>
		
		<form method="POST" action="">
		
		<button class="button" id="m2" name="M001" onclick="addToCart()">Add to cart</button>
		<button class="button" id="m4" name="M002" onclick="addToCart()">Add to cart</button>
		<button class="button" id="m6" name="M003" onclick="addToCart()">Add to cart</button>
		<button class="button" id="m8" name="M004" onclick="addToCart()">Add to cart</button>
		<button class="button" id="m10" name="M005" onclick="addToCart()">Add to cart</button>
		<button class="button" id="m12" name="M006" onclick="addToCart()">Add to cart</button>
		
		</form>
		
	</div></fieldset>
	<br><br>
	
	<fieldset class="rectangle5">
    <legend><h2>Brain Games</h2></legend>
	<div>
		<img id="picb1" src="../images/picb1.jpg">
		<img id="picb2" src="../images/picb2.jpg">
		<img id="picb3" src="../images/picb3.jpg">
		<img id="picb4" src="../images/picb4.png">
		<img id="picb5" src="../images/picb5.jpg">
		<img id="picb6" src="../images/picb6.png">
		
		<br>
		<div><a href="#redirect"><button class="button" id="b1" onclick="buy('b1')">Buy</button></a></div>
		<div><a href="#redirect"><button class="button" id="b3" onclick="buy('b3')">Buy</button></a></div>
		<div><a href="#redirect"><button class="button" id="b5" onclick="buy('b5')">Buy</button></a></div>
		<div><a href="#redirect"><button class="button" id="b7" onclick="buy('b7')">Buy</button></a></div>
		<div><a href="#redirect"><button class="button" id="b9" onclick="buy('b9')">Buy</button></a></div>
		<div><a href="#redirect"><button class="button" id="b11" onclick="buy('b11')">Buy</button></a></div>
		
		<form method="POST" action="">
		
		<button class="button" id="b2" name="B001" onclick="addToCart()">Add to cart</button>
		<button class="button" id="b4" name="B002" onclick="addToCart()">Add to cart</button>
		<button class="button" id="b6" name="B003" onclick="addToCart()">Add to cart</button>
		<button class="button" id="b8" name="B004" onclick="addToCart()">Add to cart</button>
		<button class="button" id="b10" name="B005" onclick="addToCart()">Add to cart</button>
		<button class="button" id="b12" name="B006" onclick="addToCart()">Add to cart</button>
		
	</div></fieldset>
	
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlinegames";

$conn = mysqli_connect($servername, $username, $password ,$dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
  //echo "Connected successfully";
?>
		<center>
		<h2 id="shoppingCart">Shopping Cart</h2>
		<table border="1"><tr>
		<th width="40%">Game Name</th>
		<th width="30%">Skill</th>
		<th width="20%">Price</th>
		<th width="10%">Action</th></tr>
		</center>

<?php
if(isset($_POST)){
$var = array_keys($_POST);

$sqltemp1="SELECT gameID, name, skill, skillID, price FROM store WHERE skillID ='";
$sqltemp2 ="'";
$sql=$sqltemp1.$var[0].$sqltemp2;
$result = $conn->query($sql);
$row_count = $result -> num_rows;

if ($result -> num_rows > 0) {
	while ($row = $result-> fetch_assoc()) {
	if(isset($_SESSION["shoppigCart"])){
		$item_array_gameID = array_column($_SESSION["shoppigCart"], "item_gameID");
		if(!in_array($row["gameID"], $item_array_gameID)){
			
			$item_array = array(
				'item_id' => $row["gameID"],
				'item_name' => $row["name"],
				'item_skill'=> $row["skill"],
				'item_skillid'=> $row["skillID"],
				'item_price'=> $row["price"]
			);
			
			array_push($_SESSION["shoppigCart"],$item_array);
	
		}
		else{
			echo '<script>alert("Item Already Added")</script>';
			//echo '<script>window.location = cart.php</script>';
		}
	}
	else{
		$item_array = array(
			'item_id' => $row["gameID"],
			'item_name' => $row["name"],
			'item_skill'=> $row["skill"],
			'item_skillid'=> $row["skillID"],
			'item_price'=> $row["price"]
		);
		$_SESSION["shoppigCart"]=array();
		array_push($_SESSION["shoppigCart"],$item_array);
		}
	}
}
}

	if(isset($_GET["action"])){		
	if($_GET["action"] == "delete"){
		foreach($_SESSION["shoppigCart"] as $keys => $rows){
			 if($_GET["item_skillid"] == $rows["item_skillid"]){
				unset($_SESSION["shoppigCart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				//echo '<script>window.location="cart.php"</script>';
				}
			}
		}
	}
		if(!empty($_SESSION["shoppigCart"])){
			//for ($x = 0; $x < count($_SESSION["shoppigCart"]); $x++) {
				//$values = ($_SESSION["shoppigCart"][$x]);
			//var_dump($_SESSION["shoppigCart"]);
			foreach($_SESSION["shoppigCart"] as $keys => $values){
		?>
			
		  <tr><td><?php echo $values["item_name"]; ?></td>
		  <td><?php echo $values["item_skill"]; ?></td>
		  <td><?php echo $values["item_price"]; ?></td>
		  <td><a href="\MSBgames/phpForGames/buygames.php?action=delete&item_skillid=<?php echo $values["item_skillid"]; ?>"><span class="text-danger">Remove</span></a></td>
		  </tr>
		  		<?php
			}
		}
	
	
else{
	//echo "Query failed";
}
?>
		</table>
<?php
	$conn->close()
?>
	</form>
	
	</center>

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
<!--Referred from w3schools
	https://www.youtube.com/watch?v=0wYSviHeRbs-->
</html>