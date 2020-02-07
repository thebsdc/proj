<?php
      include ("includes/connect.php");
      session_start();
      if(!isset($_SESSION['uname'])){
          echo "<script>alert('Could not be accessed.Login again')</script>";
           header("location: http://localhost/proj/admin/index.php");
      }else{
          $kcid=$_GET['kcid'];
          $query="SELECT * FROM kcenter WHERE kcid='$kcid'";
          $result=mysqli_query($conn,$query);
          while($s=mysqli_fetch_array($result)){
             
                  $kcname=$s['kcname'];
                  $kcaddr=$s['kcaddr'];
                  $kcemail=$s['kcemail'];
                  $kcphone=$s['kcphone'];
              }
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
            <li><a href="contact_admin.php">Messages</a></li>
            <li><a href="logout_admin.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div>
    <h2>UPDATE KIDNEY CENTER DETAILS</h2>
    </div>
      <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Enter the updated Kidney Center details:</h3>
          </div></div>
        <form class="form-horizontal" method="post" action="editkcenter1_admin.php">
           <div class="form-group">
                <label class="col-sm-4"> Kidney center ID</label>
                    <div class="col-sm-6">
                        <p><?= $kcid ?></p>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4"> Kidney center Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter the Bank's Name" value="<?= $kcname ?>" name="kcname" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Kidney center Address</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="kcaddr" value="<?= $kcaddr ?>" placeholder="Enter the Bank's address" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Kidney center Email-ID</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" placeholder="Enter the Kidney Center Email address" value="<?= $kcemail ?>" name="kcemail" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Kidney center phone no.</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" value="<?= $kcphone ?>" placeholder="Enter the Kidney center number" name="kcphone" required>
                    </div>
            </div>
            
            <input type="hidden" name="kcid" value="<?= $kcid; ?>">
            <input type=hidden name="oldkcname" value="<?= $kcname; ?>">
            <div class="pull-right">
                <button type="submit" class="btn btn-primary">Next>></button>
            </div>    
        </form>
	<!-- Fixed footer -->
    <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
    	<div class="container">
    		<div class="navbar-text pull-left">
    			<p>Project by:<b>CHANDAN B S D</b> & <b>DEEKSHITH S G</b></p>
    		</div>
    		
    	</div>
    </div>
    
   
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>