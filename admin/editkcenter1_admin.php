<?php
      include ("includes/connect.php");
      session_start();
      if(!isset($_SESSION['uname'])){
          echo "<script>alert('Page could not be accessed')</script>";
           header("location: http://localhost/proj/admin/home_admin.php");
      }else{
          $oldkcname=$_POST['oldkcname'];
          $kcid=$_POST['kcid'];
          $kcname=$_POST['kcname'];
          $kcaddr=$_POST['kcaddr'];
          $kcemail=$_POST['kcemail'];
          $kcphone=$_POST['kcphone'];
          $query="UPDATE `kcenter` SET `kcname` = '$kcname', `kcaddr` = '$kcaddr', `kcemail` = '$kcemail', `kcphone` = '$kcphone' WHERE `kcname` = '$oldkcname'";
          $result=mysqli_query($conn,$query);
          if(!$result){
              echo "<script>alert('Couldn\'t edit Kidney center details')</script>";
          }else{
              echo "<script>alert('Kidney center details edited successfully')</script>";
          }
        header("location: http://localhost/proj/admin/home_admin.php");   
        
    }?>