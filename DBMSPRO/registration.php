<?php
	require_once('config.php');
?>
<html>
<head>
	<title> Student Sign Up </title>
</head>
<style>
h1{
	color:#ff9800;
	text-align:center;
}
.alert{
	color:#757575;
	text-align:center;
}
.login{
	margin-top:50px;
	margin-left:466px;
	height:830px;
	width:350px;
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
	color:#757575;
	width:100%;
	margin-bottom:20px;
}

.login input[type="text"], input[type="email"],input[type="password"]{
	border:none;
	border-bottom:1px solid #ff2600;
	background:transparent;
	outline:none;
	height:40px;
}
.login button{
	width:100%;
	margin-bottom:20px;
	border:none;
	outline:none;
	height:30px;
	background:#00015d;
	color:#ff9800;
	font-size:18px;
	border-radius:20px;
	cursor:pointer;
}
.login select{
	width:100%;
	margin-bottom:20px;
	background:transparent;
	outline:none;
	color:#757575;
	border:1px solid #ff2600;
}
.login input[type="number"]{
	width:100%;
	margin-bottom:20px;
	background:transparent;
	outline:none;
	border:1px solid #ff2600;
}
a{
	font-weight: 100;
	color:#757575;
	font-size:16px;
	text-decoration: none;
}

</style>
<body background="background2.jpg">
	<div>
		<?php
			if(isset($_POST['regstd'])){
				$USN = $_POST['USN'];
				$Name = $_POST['Name'];
				$Email = $_POST['Email'];
				$Password = $_POST['Password'];
				$Phone = $_POST['Phone'];
				$Department = $_POST['Department'];
				$GraduationYear = $_POST['GraduationYear'];


				$EncryptPassword = md5($Password);

				$sql = "INSERT INTO student(USN,Name,Email,Password,Phone,Department,GraduationYear) VALUES (?,?,?,?,?,?,?)";

				$stmtinsert = $db->prepare($sql);
				$result = $stmtinsert->execute([$USN,$Name,$Email,$EncryptPassword,$Phone,$Department,$GraduationYear]);

				if($result){
					header("location: StdLogin.php"); 
				}

			}

		?>
	</div>
	<div class="header"> <h1> INTERNSHIP SYSTEM </h1> </div>
		<br> 
			<form name="register" action:"registration.php" method="post" >
			<div class="login"> 
				<h2 style="margin-top:-15px; color:#ff9800"> STUDENT SIGN UP </h2> 
				<br>
				<label for="USN"> USN </label> <br> <br>
				<input type="text" name="USN" placeholder="Enter UserID" required >

				<label for="Name"> NAME </label> <br> <br>				
				<input type="text" name="Name" placeholder="Enter Name" required >

				<label for="Email"> EMAIL </label> <br> <br>				
				<input type="email" name="Email" placeholder="Enter Email-Id" required >

				<label for="Password"> PASSWORD </label> <br> <br>				
				<input type="password" name="Password" placeholder="Enter Password" required >

				<label for="Phone"> MOBILE NO. </label> <br> <br>				
				<input type="text" name="Phone" placeholder="Enter Mobile No." maxlength="10" max="10" size="10" required > <br>
				<br>

				<label for="Department"> DEPARTMENT </label> <br> <br>				
				<select name="Department">
					<option value="">Select...</option>
					<option value="CSE">Computer Science Engineering</option>
  					<option value="MECH">Mechanical Engineering</option>
  					<option value="IEM">Industrial Engineering and Management</option>
  					<option value="CIVIL">Civil Engineering</option>
  					<option value="ISE">Information Science Engineering</option>
  					<option value="ECE">Electronics and Communication Engineering </option>
  					<option value="EIE">Electronics and Instrumentation Engineering </option>
  				</select> 
  				<br> <br> <br>
				<label for="GraduationYear"> GRADUATION YEAR </label> 
				<br> <br> 
				<input type="number" name="GraduationYear" min="2021" max="2099" step="1" value="2021" />
				<br> <br> 
				<button type="submit" name="regstd"> SIGN UP </button>
				<br> <br>
				<a href="StdLogin.php"> Have An Account Already? </a>
			</div>	
		</form>
</body>
</html>