<?php
   define('DB_HOST', 'localhost'); 
   define('DB_NAME', 'internshipdb');  
   define('DB_USER','root');  
   define('DB_PASSWORD','');  
   $db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

   session_start();
   
   if(session_destroy()) {
      header("Location: StdLogin.php");
   }
?>