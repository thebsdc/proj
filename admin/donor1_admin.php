<?php
      include ("includes/connect.php");
      session_start();
      if(!isset($_SESSION['uname'])){
          echo "<script>alert('Donor page could not be accessed')</script>";
           header("location: http://localhost/proj/home_admin.php");
      }else{
          $btype=$_POST['btype'];
          $query="SELECT * FROM donor where btype='$btype'";
          $result=mysqli_query($conn,$query);
          
          
}?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kidney Donor Admin Management</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Kidney Donor Admin Management</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="home_admin.php">Home</a></li>
            <li class="active"><a href="donor_admin.php">Reg. Donors</a></li>
            <li><a href="logs.php">Logs</a></li>  
            <li><a href="contact_admin.php">Messages</a></li>
            <li><a href="logout_admin.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Registered donors with Blood Type:<?= $btype; ?></h3>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <td>KCID</td>
                <td>KC Name</td>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Gender</td>
                <td>Blood type</td>
                <td>D.O.B</td>
                <td>Address</td>
                <td>City</td>
                <td>Mobile</td>
            </thead>
            <?php while($d=mysqli_fetch_array($result)):?>
          
                <tr>
                    <td><?= $d['kcid']; ?></td>
                    <td><?= $d['kcname']; ?></td>
                    <td><?= $d['id']; ?></td>
                    <td><?= $d['fname']." ".$d['lname']; ?></td>
                    <td><?= $d['email']; ?></td>
                    <td><?= $d['sex']; ?></td>
                    <td><?= $d['btype']; ?></td>
                    <td><?= $d['dob']; ?></td>
                    <td><?= wordwrap($d['address'],30,'<br>'); ?></td>
                    <td><?= $d['city']; ?></td>
                    <td><?= $d['mobile']; ?></td>
                    <td><a href="donordet_admin.php?id=<?= $d['id']; ?>">Complete info</a></td>
                </tr>
           
            <?php endwhile; ?>
        </table>
        <div class="panel-footer">
            <a href="donor_admin.php">Back</a>
        </div>
    </div> 
	<!-- Fixed footer -->
    <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
    	<div class="container">
    		<div class="navbar-text pull-left">
    			<p>Project by: <b>CHANDAN B S D</b> & <b>DEEKSHITH S G</b></p>
    		</div>
    		
    	</div>
    </div>
    
   
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>