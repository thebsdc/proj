<?php
      include ("includes/connect.php");
      session_start();
      if(!isset($_SESSION['uname'])){
          echo "<script>alert('Could not be accessed.Login again')</script>";
           header("location: http://localhost/proj/admin/index.php");
      }else{
          $query="SELECT * FROM kcenter";
          $result=mysqli_query($conn,$query);
    
          
}?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kidney Donor Admin Portal</title>
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
          <a class="navbar-brand" href="#">Kidney Donor Admin Portal</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="home_admin.php">Home</a></li>
            <li><a href="donor_admin.php">Reg. Donors</a></li>
            <li><a href="logs.php">Logs</a></li>           
            <li><a href="contact_admin.php">Messages</a></li>
            <li><a href="logout_admin.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div>
    
      </div>
       <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">KIDNEY CENTER UNDER AUTHORITY</h3>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <td>Kidney Center Name</td>
                <td>KC ID</td>
                <td>KC Address</td>
                <td>KC Email-ID</td>
                <td>KC Phone no.</td>
            </thead>
            <tbody>
            <?php while($d=mysqli_fetch_assoc($result)):?>
            
                <tr>
                    <td><?= $d['kcname']; ?></td>
                    <td><?= $d['kcid']; ?></td>
                    <td><?= $d['kcaddr']; ?></td>
                    <td><?= $d['kcemail']; ?></td>
                    <td><?= $d['kcphone']; ?></td>
                    <td><a href="editkcenter_admin.php?kcid=<?= $d['kcid']; ?>">Edit</a></td>
                    <td><a href="deletekcenter_admin.php?kcname=<?= $d['kcname']?>">Delete</a></td>
                </tr>
            
            <?php endwhile; ?>
            </tbody>
        </table></div>
        <a href="addkcenter_admin.php" class="btn btn-primary pull-right">Add Kidney Donation Center</a>
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