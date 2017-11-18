<?php
$server="localhost";
$username="id2565121_chetanchauhan4321";
$password="hello123";
$db="id2565121_skillspread";
$conn=mysqli_connect($server,$username,$password,$db);

   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select adminid from admin where adminid = '$user_check' ");
   $row = mysqli_fetch_assoc($ses_sql);
   
   $login_session = $row['adminid'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:adminlogin.php");
   }
?>
