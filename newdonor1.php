<?php
include 'includes/connect.php';
session_start();
if(!isset($_SESSION['em'])){
    header("Location: http://localhost/proj/newdonor.php");
}?>
<?php 
          $query="SELECT kcname FROM kcenter";
          $result=mysqli_query($conn,$query);  
?>


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
            <h3 class="panel-title">Please enter your personal details:</h3>
          </div></div>
        <form class="form-horizontal" method="post" action="newdonor1a.php">

          

            <div class="form-group">
                
                    
                        <label class="col-sm-4">First Name</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control"  pattern="[A-Za-z].{1,}" placeholder="First Name" name="fname" required>

                      </div>
            </div>
          
                    <div class="form-group">
                
                  
                        <label class="col-sm-4">Middle Name</label>
                          <div class="col-sm-6">
                        <input type="text" class="form-control" pattern="[A-Za-z].{1,}" placeholder="Middle Name" name="mname">
                    </div>
                   </div>
                    
                    <div class="form-group">
                    
                        <label class="col-sm-4">LastName</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" pattern="[A-Za-z].{1,}" placeholder="Last Name" name="lname">
                    </div>
                </div>
            <div class="form-group">
                <label class="col-sm-4">Sex</label>
                    <div class="col-sm-6">
                        <select name="sex" class="form-control" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Blood Type</label>
                    <div class="col-sm-6">
                        <select name="btype" class="form-control" required>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Date Of Birth</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="dob" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Address</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter your Address" name="address" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">City</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter your City" name="city" required>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4">Mobile</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter your Mobile number" pattern="[7-9]{1}[0-9]{9}" minlength="10" name="mobile" required>
                    </div>
                   
       
            </div>
            <div class="form-group">
                <label class="col-sm-4">Email</label>
                    <div class="col-sm-6">
                        <p><?= $_SESSION['em']; ?></p>
                    </div>
            </div>

        <div class="form-group">
           <label class="col-sm-4">Choose Kidney center</label>
           <div class="col-sm-6">
              <select name="kcname" class="form-control">
                   <?php while($d=mysqli_fetch_assoc($result)):?>
                        <option value="<?= $d['kcname']; ?>"><?= $d['kcname']?></option>
                    <?php endwhile; ?>  
              </select>
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
