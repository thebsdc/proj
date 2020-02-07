<?php
      include "includes/connect.php";
      session_start();
      if(!isset($_SESSION['uname'])){
          echo "<script>alert('Page could not be accessed')</script>";
           header("Location: http://localhost/proj/admin/contact_admin.php");
      }else{
          $msgid=$_GET['msgid'];
          $query="DELETE FROM `contact` WHERE `msgid` = '$msgid'";
          $result=mysqli_query($conn,$query);
          if(!$result)
          {
              echo "<script>alert('Couldn\'t delete message')</script>";
          }else{
              echo "<script>alert('message deleted successfully')</script>";
          }
          header("Location: http://localhost/proj/admin/contact_admin.php");
}?>
    
   
  
 


