<?php 
 	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'internshipdb');  
	define('DB_USER','root');  
	define('DB_PASSWORD','');  
 	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to  MySQL: " . mysqli_error($con)); 
 	$sql = "SELECT USN, Name, GraduationYear FROM student;";
 	$result = mysqli_query($con,$sql);

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
	.stud{ 								/* box */
		margin:auto;
		width:360px;
		height:auto;
		box-sizing:border-box;
		background:rgba(0,0,0,0.6) ;  /*to make it transparent */
		font-weight:20px;
		font-size:20px;
	}
	
	table, th, td {
		color:white;
  border: 1.5px solid white;
  border-collapse: collapse;
}
table{
	text-align:center;
	font-size:18px;
}
</style>
<body>
	<form method="post" action="StudentsView.php">
	<div class="bg-image" ></div>
	<br>
		<h1> INTERNSHIP </h1>
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
		<br><br> <br><br>
		<div class="stud">
			<center><table>
				<tr>
					<th>USN</th>
					<th>Name</th>
					<th> Graduation Year</th>
				</tr>

				<?php 
 						while($row = mysqli_fetch_assoc($result))
 						{
 				?>
 					<tr>
 						<td> <?php echo $row['USN'] ?> </td>
 						<td> <?php echo $row['Name'] ?> </td>
 						<td> <?php echo $row['GraduationYear'] ?> </td>
 					</tr>
 				<?php
 						}
 				?>
			</table> </center>
		</div>
	</form>
</body>
</html>