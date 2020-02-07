<?php
include 'includes/connect.php';
session_start();
if(!isset($_SESSION['em'])){
    header("Location: http://localhost/proj/newdonor.php");
}
$email=$_SESSION['em'];
$don_date=$_POST['don_date'];
$stats=$_POST['stats'];
$temp=$_POST['temp'];
$pulse=$_POST['pulse'];
$bp=$_POST['bp'];
$weight=$_POST['weight'];
$hemoglobin=$_POST['hemoglobin'];
$hbsag=$_POST['hbsag'];
$aids=$_POST['aids'];
$malaria_smear=$_POST['malaria_smear'];
$hematocrit=$_POST['hematocrit'];
$query="SELECT `id` FROM `donor` WHERE `email`='$email'";
$result=mysqli_query($conn,$query);




while($l=mysqli_fetch_array($result)){
    $id=$l['id'];
}
$_SESSION['did']=$id;
$query1="INSERT INTO `donormed` (`id`, `don_date`, `stats`, `temp`, `pulse`, `bp`, `weight`, `hemoglobin`, `hbsag`, `aids`, `malaria_smear`, `hematocrit`) VALUES ('$id', '$don_date', '$stats', '$temp', '$pulse', '$bp', '$weight', '$hemoglobin', '$hbsag', '$aids', '$malaria_smear', '$hematocrit')";
$result1=mysqli_query($conn,$query1);
if(!$result1){
    echo "<script>alert('Could not be registered .Try again')</script>";
}else{
    header("Location: http://localhost/proj/newdonor3.php");
}
?>