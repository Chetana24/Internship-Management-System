<?php
   include('session.php');
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
		width:1050px;
		height:41px;
		margin-left:130px;
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
		font-family:sans-serif;
	}
	.NavBar a:hover {
		color:black;
		background:white;
		transition:0.6s;
		border-radius:20px;
	}
</style>
<body>
	<div class="bg-image" ></div>
		<br>
		<h1> INTERNSHIP </h1>
		<h2><i> Welcome  <?php echo $login_session; ?> ! </i></h2>
		<br>
		<div class="NavBar">
			<ul style="">
				<center><li style="text-align: center;"><a href="StudentAcc.php">HOME </a></li>
				<li style="text-align: center;"><a href="StdCompany.php">COMPANIES </a></li> 
				<li style="text-align: center;"><a href="Placements.php">PLACEMENTS </a></li>
				<li style="text-align: center;"><a href="StdInternship.php">INTERNSHIP</a></li>
				<li><a href="Skill-Int.php">SKILL-INTERNSHIP </a></li>	
				<li style="text-align: center;"><a href="logout.php"> LOG OUT </a></li></center>
		</div>
		<br><br><br>
		<div>
				<center>
					<a href="rateSupervisor.php" style="color:black; font-family:sans-serif;font-weight:bold;font-size: 20px;"> RATE-SUPERVISOR </a>
				</center>


		</div>
</body>
</html>