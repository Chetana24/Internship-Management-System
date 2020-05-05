<?php
	require_once('config.php');
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
		color:#fc0342;
		background:white;
		transition:0.6s;
		border-radius:20px;
	}
	.add{ 								/* box */
		margin:auto;
		width:300px;
		height:500px;
		box-sizing:border-box;
		background:rgba(0,0,0,0.6) ;  /*to make it transparent */
		font-weight:20px;
		font-size:20px;
		color:#ffb13e;
	
	}
	.add p{
		text-align:center;
	}
	.add input{
		text-align:center;
		margin-left:60px;
		width:180px;
		margin-bottom:20px;
		color:white;
	}
	::-webkit-input-placeholder {
		color: #ffa20a;
	}
	.add input[type="text"], input[type="email"]{

	border:none;
	border-bottom:2px solid black;
	background:transparent;
	outline:none;
	height:15px;
	}
	.add input[type="submit"]{
	border:none;
	outline:none;
	height:25px;
	background:black;
	color:#ffa215;
	font-size:15px;
	border-radius:20px;
	cursor:pointer;
}
</style>
<body>
	<form method="post" action="AddCompany.php">
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
		<div>
			<?php
			if(isset($_POST['submit'])){
				$companyID = $_POST['companyID'];
				$name = $_POST['name'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
		
		

				$sql = "INSERT INTO company(companyID,name,email,phone) VALUES (?,?,?,?)";

				$stmtinsert = $db->prepare($sql);
				$result = $stmtinsert->execute([$companyID,$name,$email,$phone]);

				if($result){
					echo"<script>alert('Company Added!')</script>";
				}

			}

		?>
		</div>
		<div class="add">
			<br>
			<p style="font-size:24px; "> <b> ADD COMPANY </b> </p> 
			<center><label for="companyID" style="color:white; font-size:18px; font-family:sans-serif;"> COMPANY ID </label> </center><br> 
			<input type="text" name="companyID" placeholder="Enter CompanyID" required> <br>

			<center><label for="name" style="color:white; text-align:center;font-family:sans-serif"> NAME </label></center> <br> 
			<input type="text" name="name" placeholder="Enter Name" required> <br>

			<center><label for="email" style="color:white; text-align:center;font-family:sans-serif"> EMAIL </label></center> <br> 
			<input type="email" name="email" placeholder="Enter Email-Id" required><br> 

			<center><label for="phone" style="color:white; text-align:center;font-family:sans-serif"> MOBILE NO. </label></center> <br> 
			<input type="text" name="phone" placeholder="Enter Mobile No." maxlength="10" max="10" size="10" required> 
			<br> <br>
			<input type="submit" name="submit" value="ADD COMPANY">
		</div>
</form>
</body>
</html>