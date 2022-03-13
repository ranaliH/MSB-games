
<?php

     if(isset($_POST['create']))
	 {
		 
		 $db = mysqli_connect("localhost", "root", "", "onlinegames"); 
  
		
		
		 $username =  $_POST['name'];
         $email = $_POST['email'];
         $firstname = $_POST['first'];
         $lastname = $_POST['Last'];
         $pfirstname = $_POST['gFirst'];
         $plastname =  $_POST['gLast'];
         $dateofbirth =  $_POST['dob'];
		 $password= $_POST['psw'];
		 
		 $sql = "SELECT username, email FROM userdetails WHERE username=? OR email=?";
		 $stmt = mysqli_stmt_init($db);
		 
		 if (!mysqli_stmt_prepare($stmt, $sql))
		 { 
	          echo 'sql error';
		 }	 
		  else 
		 {
			 mysqli_stmt_bind_param($stmt, "ss", $username, $email);
			 mysqli_stmt_execute($stmt);
			 mysqli_stmt_store_result($stmt);
			 
			 $resultcheck= mysqli_stmt_num_rows($stmt);
			 
			 if ($resultcheck > 0)
			 {
				 echo ('Username or email already taken');
			    
	         }
			 
			 else
			 {
				  $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
		 
		          $sql = "INSERT INTO userdetails (username, firstname, lastname, dateofbirth, password, pFirstName, pLastName, email) 
  			           VALUES ('$username', '$firstname', '$lastname', '$dateofbirth', '$hashedPwd', '$pfirstname', '$plastname', '$email')";
				   
		
		        if(mysqli_query($db,$sql))
		      {
			      header('Location: home.php');
		      } 
	          }
			          
				  }
			 }
			 
         //Referred fromhttps://www.youtube.com/watch?v=LC9GaXkdxF8&t=3503s
	 ?>