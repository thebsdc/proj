<?php
include 'includes/connect.php';
session_start();
if(!isset($_SESSION['em'])){
    header("Location: http://localhost/proj/newdonor.php");
}?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KIDNEY DONOR MANAGEMENT SYSTEM</title>
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
          <a class="navbar-brand" href="#">KIDNEY DONOR MANAGEMENT SYSTEM</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Sign-In</a></li>       
            <li class="active"><a href="newdonor.php">Sign-Up</a></li>          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    <div>
        <h2>NEW DONOR REGISTRATION</h2>
    </div>
      <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Please enter your Medical Information:</h3>
          </div></div>
        <form class="form-horizontal" method="post" action="newdonor2a.php">
            <div class="form-group">
                <label class="col-sm-4">Health Status</label>
                    <div class="col-sm-6">
                        <input name="stats" type="text" class="form-control" placeholder="Enter your current health status" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Temperature</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="temp" placeholder="Enter your body temperature in celsius" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Pulse Rate</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="pulse" placeholder="Enter your pulse rate" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Blood Pressure</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="bp" placeholder="Enter your current blood pressure   Eg:80/120" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Weight</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="weight" placeholder="Enter your weight in kg" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Hemoglobin Level</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="hemoglobin" placeholder="Enter the hemoglobin level in your blood" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Hematocrit level</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="hematocrit" placeholder="Enter hematocrit level of your blood" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Hepatitis-B test result</label>
                    <div class="col-sm-6">
                        <select name="hbsag" class="form-control" required>
                            <option value="negative">Negative</option>
                            <option value="positive">Positive</option>
                            <option value="unknown">Unknown</option>
                        </select>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">AIDS</label>
                    <div class="col-sm-6">
                        <select name="aids" class="form-control" required>
                            <option value="negative">Negative</option>
                            <option value="positive">Positive</option>
                            <option value="unknown">Unknown</option>
                        </select>
                    </div>
            </div><div class="form-group">
                <label class="col-sm-4">Malaria-smear test result</label>
                    <div class="col-sm-6">
                        <select name="malaria_smear" class="form-control" required>
                            <option value="negative">Negative</option>
                            <option value="positive">Positive</option>
                            <option value="unknown">Unknown</option>
                        </select>
                    </div>
            </div>
    
            <div class="pull-right">
                <button type="submit" class="btn btn-primary">Next>></button>
            </div>    
        </form>
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
