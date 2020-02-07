<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kidney Center Admin Portal</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Kidney Donor Admin Portal</a>
        </div>
      </div>
    </div>
    <div class="loginbox">
<img src="includes/pic2.png" class="avatar"/>
<h1>Admin Login</h1>
<form method="post" action="index.php">
<p>Username</p>
<input type="text" name="uname" placeholder="Enter your Administrative username" required>
<p>Password</p>
<input type="password" name="pw" placeholder="Enter your password" required>
<input type="submit" name="adminlogin" value="login">
</form>
    </div>
	<!-- Fixed footer -->
    <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
    	<div class="container">
    		<div class="navbar-text pull-left">
    			<p>Project by: <b>CHANDAN B S D</b> & <b>DEEKSHITH S G</b></p>
    		</div>
    		
    	</div>
    </div>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php
include 'includes/connect.php';
session_start();
if(isset($_SESSION['uname'])){
    header("Location: http://localhost/proj/admin/home_admin.php");
}else{
    session_destroy();
}
if(isset($_POST['adminlogin'])){
$uname=$_POST['uname'];
$pw=$_POST['pw'];
$query="SELECT * FROM admin WHERE uname='$uname' and password='$pw'";
$result=mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){
    session_start();
    $_SESSION['uname']=$uname;
    header("Location: http://localhost/proj/admin/home_admin.php");
}else{
    echo "<script>alert('Invalid password or username')</script>";
}
}
?>

