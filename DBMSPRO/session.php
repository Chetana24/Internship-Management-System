<?php
   define('DB_HOST', 'localhost'); 
   define('DB_NAME', 'internshipdb');  
   define('DB_USER','root');  
   define('DB_PASSWORD','');  
   $db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select USN from student where USN = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['USN'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:StdLogin.php");
      die();
   }
?>