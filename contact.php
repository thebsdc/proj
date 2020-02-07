<?php
include ("includes/connect.php");
session_start();
if(isset($_SESSION['email'])){
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$msg=$_POST['msg'];
$id=$_SESSION['id'];
$query="INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `msg`) VALUES ('$id', '$name', '$email', '$subject', '$msg')";
$result=mysqli_query($conn,$query);
if($result){
    echo "<script>alert('Message submitted successfully')</script>";
}else{
    echo "<script>alert('Message was not submitted.Try again')</script>";
}
header('Location: http://localhost/proj/home.php');
}
?>