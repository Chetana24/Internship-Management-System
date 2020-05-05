<?php 

 	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'internshipdb');  
	define('DB_USER','root');  
	define('DB_PASSWORD','');  
 	$db=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to  MySQL: " . mysqli_error($db)); 
 
 	$conection=mysqli_select_db($db, DB_NAME) or die("Failed to connect to MySQL: " .  mysqli_error($db)); 
 	
   
 ?>
<html>
<head>
	<title> Welcome Student! </title>
</head>
<style>
	body{
		background-color:black;
		background-image: url("pinkbooks.png");
		background-repeat: no-repeat;
		background-position: center;
		background-size: 1100px 700px;
		font-family: sans-serif;
	}
	
	h1{
		text-align: center;
		color:black;
		font-family: sans-serif;	
	}
	h2{
		text-align: center;
		color: black;
		font-family: sans-serif;
	}
	.NavBar{
		
	}
	.NavBar ul{
		border-radius:20px;
		background:black;
		width:950px;
		height:41px;
		margin-left:175px;
		list-style-type: none;
		color:white;
		text-align: left;
		font-family: sans-serif;
	}
	.NavBar li{
		display:inline-block; 
	}
	.NavBar a{
		
		text-decoration: none;
		color:#f5c26f;
		width:140px;
		display:block;
		padding:12px;
		font-size:15px;
	}
	.NavBar a:hover {
		color:black;
		background:white;
		transition:0.6s;
		border-radius:20px;
	}
	.comp{ 		/* box */
		margin:auto;
		width:320px;
		height:220px;
		box-sizing:border-box;
		background:rgba(0,0,0,0.1) ;  /*to make it transparent */
		font-weight:20px;
		font-size:20px;
		text-align:center;
		
	
	}
	.comp p{
		text-align:center;
	}
	.comp input{
		text-align:center;
		
		width:180px;
		margin-bottom:20px;
		color:white;
	}

	.comp input[type="submit"]{
	
	border:none;
	outline:none;
	height:35px;
	background:black;
	color:#ffa215;
	font-size:17px;
	border-radius:20px;
	cursor:pointer;
}
</style>
<body>
	<form method="post" action="StdCompanyView.php">
	<div class="bg-image" ></div>
		<br><br>
		<h1> INTERNSHIP </h1>

		<br><br>
		<div class="NavBar">
			<ul style="">
				<li style=" margin-left:25px;text-align: center;"><a href="StudentAcc.php">HOME </a></li>
				<li style="text-align: center;"><a href="StdCompany.php">COMPANIES </a></li>				
				<li style="text-align: center;"><a href="Placements.php">PLACEMENTS </a></li>
				<li style="text-align: center;"><a href="StdInternship.php">INTERNSHIP</a></li>
				<li style="text-align: center;"><a href="Skill-Int.php">SKILL-INTERNSHIP </a></li>	
			</ul>
		</div>
		<br><br><br>
		<div class="comp">
			<br>
			<p style="font-size:23px; font-family:sans-serif;"> <b> VIEW LIST OF COMPANIES </b> </p> 
			<br> 
			<input type="submit" name="submit" value="Company List">
		</div>
	</form>
</body>
</html>