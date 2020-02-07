<?php
      include ("includes/connect.php");
      session_start();
      if(!isset($_SESSION['uname'])){
          echo "<script>alert('Donor page could not be accessed')</script>";
           header("location: http://localhost/proj/home_admin.php");
      }else{
          $query="SELECT * FROM donor";
          $result=mysqli_query($conn,$query);
          
          $query2="SELECT kcname FROM kcenter";
          $result2=mysqli_query($conn,$query2);  

          
}?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
Kidney Donor Admin Portal</title>
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
Kidney Donor Admin Portal</a>
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
    <form class="form-horizontal" method="post" action="donor1_admin.php">
                    <div class="form-group">
                        <label class="col-sm-6">Search by blood group:</label>
                        <div class="col-sm-4">
                            <select name="btype" class="form-control">
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
                        <div class="col-sm-2">
                            <button class="btn btn-info btn-sm" name="search" value='true'>Search</button>
                        </div>
                    </div>

        </form>
        <form class="form-horizontal" method="post" action="donor2_admin.php">
                    <div class="form-group">
                        <label class="col-sm-6">Search by city:</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" name="city" required>
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-info btn-sm" name="search1" value='true'>Search</button>
                        </div>
                    </div>

        </form>

        <form class="form-horizontal" method="post" action="donor3_admin.php">
                   
                    <div class="form-group">
           <label class="col-sm-6">Search by Kidney center:</label>
           <div class="col-sm-4">
              <select name="kcname" class="form-control">
                   <?php while($z=mysqli_fetch_assoc($result2)):?>
                        <option value="<?= $z['kcname']; ?>"><?= $z['kcname']?></option>
                    <?php endwhile; ?>  
              </select>
        </div>
        <div class="col-sm-2">
                            <button class="btn btn-info btn-sm" name="search2" value='true'>Search</button>
        </div>
    </div>
        </form>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Registered donors</h3>
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