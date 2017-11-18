<?php
 $server="localhost";
$username="id2565121_chetanchauhan4321";
$password="hello123";
$db="id2565121_skillspread";
$conn=mysqli_connect($server,$username,$password,$db);
$error="";
session_start();
/*$server="localhost";
$username="learn_php";
$password="hello123";
$db="skill_spread";
$conn=mysqli_connect($server,$username,$password,$db);

*/
if(isset($_POST['submit']))
{
    $adminid=mysqli_real_escape_string($conn,$_POST['adminid']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $target="";
    $sql="select * from admin where adminid='$adminid' AND password='$password'" ;
    $run=mysqli_query($conn,$sql);
    $rows=mysqli_num_rows($run);
    if($rows==1)
    {
        // session_register("adminid");
         $_SESSION['login_user'] = $adminid;
        header("location: admin.php");
    }
    else
    {
        $error="Incorrect ID or Password";
    }
    mysqli_close($conn);
   
    
}

?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>CodePen - Login </title>

    <link rel="stylesheet" href="assets/css/loginStyle.css" media="screen" type="text/css" />
   
     

</head>

<body>

  <div class="wrap">
		<div class="avatar">
      <img src="assets/img/usericon.png">
		</div>
		<form method="post">
		<input type="text" placeholder="username" name="adminid" required>
		<div class="bar">
			<i></i>
		</div>
		<input type="password" placeholder="password" name="password" required>
		<button   name="submit">Sign in</button>
		 <center><span style="color:red"><?php echo $error?></span></center>
		</form>
	</div>

</body>

</html>
