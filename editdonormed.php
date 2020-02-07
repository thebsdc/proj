<?php
      include 'includes/connect.php';
      session_start();
      if(!isset($_SESSION['email'])){
          echo "<script>alert('Could not be accessed.Login again')</script>";
           header("location: http://localhost/proj/index.php");
      }
?>
          
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
KIDNEY DONOR MANAGEMENT SYSTEM</title>
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
          <a class="navbar-brand" href="#">
KIDNEY DONOR MANAGEMENT SYSTEM</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="home.php">My Profile</a></li>                 
            <li><a href="#contact" data-toggle="modal">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
   
    <div>
        <h2>DONOR MEDICAL INFORMATION</h2>
    </div>
      <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Please edit your Medical Information:</h3>
          </div></div>
        <form class="form-horizontal" method="post" action="editdonormed1.php">
            <div class="form-group">
                <label class="col-sm-4">Date of prev. donation</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" placeholder="Enter the date in which u have previously donated blood" 
                        value="<?= $_SESSION['don_date']?>" name="don_date" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Health Status</label>
                    <div class="col-sm-6">
                        <input name="stats" type="text" class="form-control" value="<?= $_SESSION['stats']?>" placeholder="Enter your current health status" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Temperature</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="temp" value="<?= $_SESSION['temp']?>" placeholder="Enter your body temperature in celsius" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Pulse Rate</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="pulse" value="<?= $_SESSION['pulse']?>" placeholder="Enter your pulse rate" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Blood Pressure</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="bp" value="<?= $_SESSION['bp']?>" placeholder="Enter your current blood pressure   Eg:80/120" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Weight</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="weight" value="<?= $_SESSION['weight']?>" placeholder="Enter your weight in kg" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Hemoglobin Level</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="hemoglobin" value="<?= $_SESSION['hemoglobin']?>" placeholder="Enter the hemoglobin level in your blood" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Hematocrit level</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="hematocrit" value="<?= $_SESSION['hematocrit']?>" placeholder="Enter hematocrit level of your blood" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Hepatitis-B test result</label>
                    <div class="col-sm-6">
                        <select name="hbsag" class="form-control" value="<?= $_SESSION['hbsag']?>" required>
                            <option value="negative">Negative</option>
                            <option value="positive">Positive</option>
                            <option value="unknown">Unknown</option>
                        </select>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">AIDS</label>
                    <div class="col-sm-6">
                        <select name="aids" class="form-control" value="<?= $_SESSION['aids']?>" required>
                            <option value="negative">Negative</option>
                            <option value="positive">Positive</option>
                            <option value="unknown">Unknown</option>
                        </select>
                    </div>
            </div><div class="form-group">
                <label class="col-sm-4">Malaria-smear test result</label>
                    <div class="col-sm-6">
                        <select name="malaria_smear" class="form-control" value="<?= $_SESSION['malaria_smear']?>" required>
                            <option value="negative">Negative</option>
                            <option value="positive">Positive</option>
                            <option value="unknown">Unknown</option>
                        </select>
                    </div>
            </div>
    
            <div class="pull-right">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>         
	<!-- Fixed footer -->
    <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
    	<div class="container">
    		<div class="navbar-text pull-left">
    			<p>Project by: <b>CHANDAN B S D</b> & <b>DEEKSHITH S G</b></p>
    		</div>
    
    	</div>
    </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <div class="modal fade" id="contact" role="dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<form class="form-horizontal" role="form" method="post" action="contact.php">
    				<div class="modal-header">
                        <h4>Contact</h4>
                            </div>
	    			<div class="modal-body">
    					<div class="form-group">
    						<label for="contact-name" class="col-sm-2 control-label">Name</label>
    						<div class="col-sm-10">
    							<input type="text" class="form-control" value="<?= $_SESSION['fname']." ".$_SESSION['lname']; ?>" placeholder="First & Last Name" name="name">
    						</div>
    					</div>
    					<div class="form-group">
    						<label for="contact-email" class="col-sm-2 control-label">Email</label>
    						<div class="col-sm-10">
    							<input type="email" class="form-control" value="<?= $_SESSION['email']; ?>" placeholder="example@domain.com" name="email">
    						</div>
    					</div>
    					<div class="form-group">
    						<label for="contact-subject" class="col-sm-2 control-label">Subject</label>
    						<div class="col-sm-10">
    							<input type="text" class="form-control" id="contact-subject" name="subject">
    						</div>
    					</div>
    					<div class="form-group">
    						<label for="contact-message" class="col-sm-2 control-label">Message</label>
    						<div class="col-sm-10">
    							<textarea class="form-control" rows="4" name="msg"></textarea>
    						</div>
    					</div>
	    			</div>
	    			<div class="modal-footer">
    					<a class="btn btn-default" data-dismiss="modal">Close</a>
    					<button type="submit" class="btn btn-primary">Send</button>
    				</div>
    			</form>
    		</div>
    	</div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>