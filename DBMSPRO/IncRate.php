<?php
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'internshipdb');  
	define('DB_USER','root');  
	define('DB_PASSWORD',''); 

 	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
 	if(mysqli_connect_errno()){
 		echo "Failed to connect: " . mysqli_connect_errno();
 	}

 	if(isset($_POST['update'])){
 		echo "Updated";
 			$cId= $_POST['cId'];
	 		$percentIncrease = $_POST['percentIncrease'];
 			$sql = mysqli_query($con,"CALL ` IncHourlyRate`('$cId' , '$percentIncrease')");

	 	if($sql){
	 		echo"<script>alert('Updated!')</script>";
 		}
 		else{
			echo"<script>alert('not updated')</script>";
		}
 	}
	?>

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
		background-size: 1100px 800px;
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
		width:1200px;
		height:50px;
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
	}
	.NavBar a:hover {
		color:black;
		background:white;
		transition:0.6s;
		border-radius:20px;
	}
	.inc{ 								/* box */
		margin:auto;
		width:300px;
		height:420px;
		box-sizing:border-box;
		background:rgba(0,0,0,0.6) ;  /*to make it transparent */
		font-weight:20px;
		font-size:20px;
	}
	::-webkit-input-placeholder {
		color: #ffa20a;
	}
	.inc p{
		text-align:center;
		
		text-shadow: -0.5px 0 black, 0 0.5px black, 0.5px 0 black, 0 -0.5px black;
	}
	.inc input{
		text-align:center;
		margin-left:60px;
		width:180px;
		margin-bottom:20px;
		color:white;
	}

	.inc input[type="text"]{
	border:none;
	border-bottom:2px solid black;
	background:transparent;
	outline:none;
	height:15px;
	color:white;
	}
	.inc input[type="submit"]{
	border:none;
	outline:none;
	height:35px;
	background:black;
	color:#ffa215;
	font-size:13px;
	border-radius:20px;
	cursor:pointer;
}
</style>
<body>
	<form method="post" action="IncRate.php">
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
				<li style="text-align: center;"><a href="GraduationYr.php">GRADUATION YEAR</a></li></center>
			</ul>
		</div>
		<div class="inc">
			<br>
			<p style="font-size:24px;color:#ffb13e;"> <b> INCREASE HOURLY RATE </b> </p> <br>

			<center><label style="color:white; font-size:18px;"> INTERNSHIP ID </label></center><br>
			<input type="text" name="cId" placeholder="Enter InternshipID" required><br>

			<center><label style="color:white; font-size:18px;"> PERCENT INCREASE</label></center><br>
			<input type="text" name="percentIncrease" placeholder="Enter the Percent Increase" required>

			<br> <br>
			<input type="submit" name="update" value="update">
			
		</div>
	</form>
</body>
</html>