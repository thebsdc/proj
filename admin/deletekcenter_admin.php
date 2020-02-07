<?php
    if(isset($_GET['kcname'])){
      include ("includes/connect.php");
      session_start();
      if(!isset($_SESSION['uname'])){
          echo "<script>alert('Page could not be accessed')</script>";
           header("location: http://localhost/proj/admin/home_admin.php");
      }else{
          $kcname=$_GET['kcname'];
          $query="DELETE FROM kcenter WHERE kcname='$kcname'";
          $result=mysqli_query($conn,$query);
          if(!result)
          {
              echo "<script>alert('Couldn\'t delete kidney center details')</script>";
          }else{
              echo "<script>alert('kidney center details deleted successfully')</script>";
          }
          header("location: http://localhost/proj/admin/home_admin.php");
}}else{
        echo "<script>alert('Page could not be accessed')</script>";
        header("location: http://localhost/proj/admin/home_admin.php");
    }?>
    
   
  
 


