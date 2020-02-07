<?php
      include ("includes/connect.php");
      session_start();
      if(!isset($_SESSION['uname'])){
          echo "<script>alert('Page could not be accessed')</script>";
           header("location: http://localhost/proj/admin/addkcenter_admin.php");
      }else{
          $kcname=$_POST['kcname'];
          $kcaddr=$_POST['kcaddr'];
          $kcemail=$_POST['kcemail'];
          $kcphone=$_POST['kcphone'];
          $query="INSERT INTO `kcenter` (`kcname`, `kcaddr`, `kcemail`, `kcphone`) VALUES ('$kcname', '$kcaddr', '$kcemail', '$kcphone')";
          $result=mysqli_query($conn,$query);
          if(!$result){
              echo "<script>alert('Couldn\'t edit stock details')</script>";
          }else{
              echo "<script>alert('Stock details edited successfully')</script>";
          }
        header("location: http://localhost/proj/admin/home_admin.php");   
        
    }?>