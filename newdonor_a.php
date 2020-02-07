<?php
include 'includes/connect.php';
session_start();
if(!isset($_POST['email'])){
    header("Location: http://localhost/proj/newdonor.php");
}
$email=$_POST['email'];
$pw1=$_POST['pw1'];
$pw2=$_POST['pw2'];
if($pw1!=pw2){
    echo "<script>alert('Passwords do not match')</script>";
    header("Location: http://localhost/proj/newdonor.php");
}
$query="SELECT * FROM donor WHERE email='$email'";
$result=mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){
    echo "<script>alert('Email is already registered with us.Please Login,or use a different email to sign-up')</script>";
}else{
    session_start();
    $_SESSION['em']=$email;
    $_SESSION['pw']=$pw1;
    header("Location: http://localhost/proj/newdonor1.php");
}
?>