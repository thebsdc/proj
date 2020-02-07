<?php
include 'includes/connect.php';
session_start();
if(!isset($_SESSION['em'])){
    header("Location: http://localhost/proj/newdonor.php");
}
$email=$_SESSION['em'];
$pw=$_SESSION['pw'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$sex=$_POST['sex'];
$btype=$_POST['btype'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$city=$_POST['city'];
$mobile=$_POST['mobile'];
$kcname=$_POST['kcname'];

$resultKCID=mysqli_query($conn,"Select `kcid` from `kcenter` where `kcname`='$kcname'");
$row = mysqli_fetch_assoc($resultKCID);
$kcid=$row["kcid"];



$query="INSERT INTO `donor` (`id`, `fname`, `mname`, `lname`, `sex`, `btype`, `dob`, `address`, `city`, `mobile`, `email`, `password`,`kcname`,`kcid`) VALUES (NULL, '$fname', '$mname', '$lname', '$sex', '$btype', '$dob', '$address', '$city', '$mobile', '$email', '$pw','$kcname','$kcid')";
$result=mysqli_query($conn,$query);


if(!$result){
    echo "<script>alert('Could not be registered .Try again')</script>";
}else{

    header("Location: http://localhost/proj/newdonor2.php");
}
?>