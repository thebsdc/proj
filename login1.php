<?php
include ("includes/connect.php");
$email=$_POST['email'];
$pw=$_POST['pw'];
$query="SELECT * FROM donor WHERE email='$email' and password='$pw'";
$result=mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){
    session_start();
    $l=mysqli_fetch_assoc($result);
        foreach($l as $e){
                $_SESSION['id'] = $e['id'];
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $pw;
                $_SESSION['fname'] = $e['fname'];
                $_SESSION['mname'] = $e['mname'];
                $_SESSION['lname'] = $e['lname'];
                $_SESSION['dob'] = $e['dob'];
                $_SESSION['sex'] = $e['sex'];
                $_SESSION['btype'] = $e['btype'];
                $_SESSION['address'] = $e['address'];
                $_SESSION['mobile'] = $e['mobile'];
        }
    
    echo "<form><input type='hidden' name='userlogin' value='true'></form>";
    header("Location: http://localhost/proj/home.php");
}else{
    echo "<script>alert('Invalid password or email')</script>";
    header("Location: http://localhost/proj/index.php");
}



?>

