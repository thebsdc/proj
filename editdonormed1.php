<?php
include 'includes/connect.php';
session_start();
if(!isset($_SESSION['email'])){
    header("Location: http://localhost/proj/newdonor.php");
}
$id=$_SESSION['id'];
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

$query1="UPDATE `donormed` SET `don_date` = '$don_date', `stats` = '$stats', `temp` = '$temp', `pulse` = '$pulse', `bp` = '$bp', `weight` = '$weight', `hemoglobin` = '$hemoglobin', `hbsag` = '$hbsag', `aids` = '$aids', `malaria_smear` = '$malaria_smear', `hematocrit` = '$hematocrit' WHERE `id` = $id";
$result1=mysqli_query($conn,$query1);
if(!$result1){
    echo "<script>alert('Could not be registered .Try again')</script>";
}else{
    header("Location: http://localhost/proj/home.php");
}
?>