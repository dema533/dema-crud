 <?php  
 //login_success.php
 session_start();  
 if(isset($_SESSION["auth"]))  
 {  
      echo '<h3>'.$_SESSION["auth"].'</h3>';
      echo '<a href="../logout.php">Se deconnecter</a>';  
 }  
 else  
 {  
      header("location:login.php");  
 }  
 ?>