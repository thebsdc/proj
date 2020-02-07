<?php
include ("includes/connect.php");
$uname=$_POST['uname'];
$pw=$_POST['pw'];
$query="SELECT * FROM admin WHERE uname='$uname' and password='$pw'";
$result=mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){
    session_start();
    while($l=mysqli_fetch_assoc($result)){
        foreach($l as $e){
                $_SESSION['aid'] = $e['aid'];
                $_SESSION['uname'] = $uname;
                $_SESSION['password'] = $pw;
        }
    }
    echo "<form method='post' action='home_admin.php'><input type='hidden' name='adminlogin' value='true'></form>";
    header("location: http://localhost/proj/admin/home_admin.php");
}else{
    echo "<script>alert('Invalid password or email')</script>";
    header("location: http://localhost/proj/admin/index_admin.php");
}



?>

