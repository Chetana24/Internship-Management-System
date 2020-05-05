<?php 
 	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'internshipdb');  
	define('DB_USER','root');  
	define('DB_PASSWORD','');  
 	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to  MySQL: " . mysqli_error($con));
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
	.place{ 		/* box */
		margin:auto;
		width:320px;
		height:230px;
		box-sizing:border-box;
		background:rgba(0,0,0,0.1) ;  /*to make it transparent */
		font-weight:20px;
		font-size:20px;
		text-align:center;
		
	
	}
	.place p{
		text-align:center;
	}
	.place input{
		border:none;
		border-bottom:2px solid black;
		text-align:center;
		background:transparent;
		outline:none;
		width:180px;
		margin-bottom:20px;
		color:black;
	}
	::-webkit-input-placeholder {
		color: black;
	}

	.place input[type="submit"]{
	
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
	<form method="post" action="PlacementsView.php">
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
		<br> <br> 
		<div class="place">
			<br>
			<p style="font-size:23px; font-family:sans-serif;"> <b> VIEW LIST OF PLACEMENTS </b> </p> 
			<input type="text" name="usn" placeholder="Enter Student USN" required ">
			<br> <br>
			<input type="submit" name="submit" value="Placements List">
			<br><br><br>
			
		</div>
</form>
</body>
</html>