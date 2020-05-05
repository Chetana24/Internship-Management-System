
<html>
<head>
	<title> Welcome Admin! </title>
</head>
<style>
body{
		background-color:black;
		background-image: url("desk.jpg");
		background-repeat: no-repeat;
		background-position: center;
		background-size: 1100px 700px;
		font-family: sans-serif;
	}
	
	h1{
		text-align: center;
		color:black;
		font-family: sans-serif;
		font-size:43px;	
		text-shadow: -1.5px 0 #ffb13e, 0 1.5px #ffb13e, 1.5px 0 #ffb13e, 0 -1.5px #ffb13e;
	}
	h3{
		text-align: center;
		color: white;
		font-family: sans-serif;
		font-size:30px;
		text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;
	}
	.NavBar ul{
		border-radius:20px;
		background:black;
		width:1250px;
		height:50px;
		font-family: sans-serif;
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
		color:#ffb13e;
		width:120px;
		display:block;
		padding:8px;
		font-size:13px;
		font-family: sans-serif;
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
		<h3><i> Welcome! </i></h3>
		<div class="NavBar">
			<ul style="">
				<center><li style="text-align: center;"><a href="AdminAcc.php">HOME </a></li>
				<li style="text-align: center;"><a href="Students.php" >STUDENTS </a></li>
				<li style="text-align: center;"><a href="DelStudent.php">DELETE STUDENT </a></li>
				<li style="text-align: center;"><a href="IncRate.php">INCREASE HOURLY RATE</a></li>
				<li style="text-align: center;"><a href="AddCompany.php">ADD COMPANY </a></li>
				<li style="text-align: center;"><a href="GraduationYr.php">GRADUATION YEAR</a></li>
				<li style="text-align: center;"><a href="login.php">LOGOUT</a></li></center>
			</ul>
		</div>

</body>
</html>