<?php 
 	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'internshipdb');  
	define('DB_USER','root');  
	define('DB_PASSWORD','');  

	function SignIn()  
 	{  
		session_start();  
		{ 
 			$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to  MySQL: " . mysqli_error($con)); 
 
 			$db=mysqli_select_db($con, DB_NAME) or die("Failed to connect to MySQL: " .  mysqli_error($con)); 
  
			$adminQuery = mysqli_query($con, "SELECT * FROM admin where PersonId =  '$_POST[PersonId]' AND Password = '$_POST[Password]'") or  die(mysqli_error($con)); 
 
			$adminRow= mysqli_fetch_array($adminQuery, MYSQLI_ASSOC); 

			if(!empty($adminRow["PersonID"]) AND !empty($adminRow["Password"])) 
			{  
				$_SESSION['PersonID'] = $adminRow['Password'];  
				header('Location: AdminAcc.php');   
			} 
			else 
			{ 
				echo "<script>alert('The UserID and Passwords dont match');</script>";
			}		 
 
		} 
 	} 
 	if(isset($_POST['loginad']))  
 	{ 
		SignIn(); 
 	} 
?> 



<html>
<head>
<title> Internship System </title>
</head>
<style>
h1{
	color:#ff9800;
	text-align:center;
}
.login{
	height:390px;
	width:250px;
	margin-top:40px;
	margin-left: 100px;
	background:transparent;
	color:#ff9800;
	text-align:center;
	padding:50px 20px;
	border: 1px #ff2600;
	outline-style:outset;
	outline-color:#ff2600;
	box-shadow: 2px 2px 8px #ff2600;
}
.login label{
	font-family: sans-serif;
	font-size: 18px;
	text-align:center;
}
.login input{
	width:100%;
	margin-bottom:20px;
	color:#757575;
}

.login input[type="text"], input[type="password"]{
	border:none;
	border-bottom:1px solid #ff2600;
	background:transparent;
	outline:none;
	height:40px;
}
.login button{
	width:100%;
	margin-bottom:20px;
	height:35px;
	background:#00015d;
	color:#ff9800;
	font-size:18px;
	border-radius:20px;
	cursor:pointer;
	outline:none;
	border:none;
}
a{
	font-weight: 100;
	color:#757575;
	font-size:16px;
	text-decoration: none;
}

</style>
<body background="background2.jpg">
	<form method="post" action="login.php">
	<div class="header"> <h1> INTERNSHIP SYSTEM </h1> </div>
	<div>
		<div class="login" style=" margin:auto; margin-top: 50px;  "> 
			<h2 style="margin-top:-15px; color:#ff9800"> ADMIN SIGN IN </h2>  <br>

			<label for="PersonID" style="font-size:20px;"> PERSON ID </label> <br> <br>
			<input type="text" name="PersonId" placeholder="Enter UserID" required > <br> <br>

			<label for="Password"> PASSWORD </label> <br> <br>		
			<input type="password" name="Password" placeholder="Enter Password" required >
			<br>
			<br> 
			<button type="submit" name="loginad"> LOGIN </button>
			<br> <br>
			</div>
		
		</div>
	</div>
</form>
</body>
</html>