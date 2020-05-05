<?php 
 	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'internshipdb');  
	define('DB_USER','root');  
	define('DB_PASSWORD','');  
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    if (isset($_POST['submit']))
    {     
   
    	session_start();
    	$USN 	= $_POST['USN'];
    	$pass=$_POST['Password'];
    	$password = md5($pass);


   		$_SESSION['login_user']= $USN; 

    	$query = mysqli_query($db,"SELECT USN FROM student WHERE USN='$USN' and Password='$password'");
    	if (mysqli_num_rows($query) != 0)
    	{
    		echo "<script language='javascript' type='text/javascript'> location.href='StudentAcc.php' </script>";   
      	}
      	else
      	{
    		echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    	}
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
	<form method="post" action ="StdLogin.php">
	<div class="header"> <h1> INTERNSHIP SYSTEM </h1> </div>
		<div class="login" style="margin:auto; margin-top: 50px">

			<h2 style="margin-top:-15px; color:#ff9800"> STUDENT SIGN IN </h2> 

			<label for="USN" style="font-size:20px;"> USN </label> <br> <br>
			<input type="text" name="USN" placeholder="Enter USN" required > <br> <br> <br>

			<label for="Password"> PASSWORD </label> <br> <br>				
			<input type="password" name="Password" placeholder="Enter Password" required >
			<br>
			<br> <br> <br>
			<button type="submit" name="submit"> LOGIN </button>
			<br> <br>
			<a href="registration.php"> Don't Have An Account Yet? </a>
		</div>
	</form>
</body>
</html>