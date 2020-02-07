<?php
      include 'includes/connect.php';
      session_start();
      if(!isset($_SESSION['email'])){
          echo "<script>alert('Could not be accessed.Login again')</script>";
           header("location: http://localhost/proj/index.php");
      }else{
          $email=$_SESSION['email'];
          $query="SELECT * FROM donor WHERE email='$email'";
          $result=mysqli_query($conn,$query);
          if(mysqli_num_rows($result)>0){
              while($l=mysqli_fetch_array($result)){
                $_SESSION['id']=$l['id'];
                $_SESSION['fname']=$l['fname'];
                $_SESSION['mname']=$l['mname'];
                $_SESSION['lname']=$l['lname'];
                $_SESSION['sex']=$l['sex'];
                $_SESSION['btype']=$l['btype'];
                $_SESSION['dob']=$l['dob'];
                $_SESSION['address']=$l['address'];
                $_SESSION['city']=$l['city'];
                $_SESSION['mobile']=$l['mobile'];

              }
            }
          $id=$_SESSION['id'];
          $query1="SELECT * FROM donormed WHERE id=$id";
          $result1=mysqli_query($conn,$query1);
          if(mysqli_num_rows($result1)>0){
            while($la=mysqli_fetch_array($result1)){
                $_SESSION['don_date']=$la['don_date'];
                $_SESSION['stats']=$la['stats'];
                $_SESSION['temp']=$la['temp'];
                $_SESSION['pulse']=$la['pulse'];
                $_SESSION['bp']=$la['bp'];
                $_SESSION['weight']=$la['weight'];
                $_SESSION['hemoglobin']=$la['hemoglobin'];
                $_SESSION['hbsag']=$la['hbsag'];
                $_SESSION['aids']=$la['aids'];
                $_SESSION['malaria_smear']=$la['malaria_smear'];
                $_SESSION['hematocrit']=$la['hematocrit'];
            }
            }      
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
            <li class="active"><a href="home.php">My Profile</a></li> 
            <li><a href="#contact" data-toggle="modal">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
   
          <h2>MY PROFILE</h2><br><br>
         <div class='panel panel-default'>
					<div class='panel-heading'>
						<h3 class='panel-title'>PERSONAL DETAILS</h3>
					</div>
					<table class='table table-bordered table-striped'>
						<tbody>
							<tr>
								<td>ID</td>
								<td><?= $_SESSION['id']?></td>
							</tr>
							<tr>
								<td>Name</td>
                                <td><?= $_SESSION['fname']." ".$_SESSION['mname']." ".$_SESSION['lname']; ?></td>
							</tr>	
							<tr>
								<td>Sex</td>
								<td><?= $_SESSION['sex']?></td>
							</tr>
							<tr>
								<td>Blood Type</td>
								<td><?= $_SESSION['btype']?></td>
							</tr>
							<tr>
								<td>DOB</td>
								<td><?= $_SESSION['dob']?></td>
                            <tr>
								<td>Address</td>
								<td><?= $_SESSION['address']?></td>
							</tr>
                            <tr>
								<td>City</td>
								<td><?= $_SESSION['city']?></td>
							</tr>
                            <tr>
								<td>Mobile</td>
								<td><?= $_SESSION['mobile']?></td>
							</tr>
							<tr>
							    <td>Email</td>
							    <td><?= $_SESSION['email']?></td>
							</tr>
						</tbody>
					</table>
                </div>   <br><br>
				
         <div class='panel panel-default'>
					<div class='panel-heading'>
						<h3 class='panel-title'>MEDICAL INFORMATION<a class="pull-right" href="editdonormed.php">Edit</a></h3>
					</div>
					<table class='table table-bordered table-striped'>
						<tbody>
							<tr>
								<td>Previous donation date</td>
								<td><?= $_SESSION['don_date']?></td>
							</tr>
							<tr>
								<td>Stats</td>
								<td><?= $_SESSION['stats']?></td>
							</tr>	
							<tr>
								<td>Temperature</td>
								<td><?= $_SESSION['temp']?></td>
							</tr>
							<tr>
								<td>Pulse</td>
								<td><?= $_SESSION['pulse']?></td>
							</tr>
							<tr>
								<td>Blood Pressure</td>
								<td><?= $_SESSION['bp']?></td>
                            <tr>
								<td>Weight</td>
								<td><?= $_SESSION['weight']?></td>
							</tr>
                            <tr>
								<td>Hemoglobin level</td>
								<td><?= $_SESSION['hemoglobin']?></td>
							</tr>
                            <tr>
								<td>hbsag</td>
								<td><?= $_SESSION['hbsag']?></td>
							</tr>
							<tr>
							    <td>AIDS</td>
							    <td><?= $_SESSION['aids']?></td>
							</tr>
							<tr>
							    <td>Malaria Smear</td>
							    <td><?= $_SESSION['malaria_smear']?></td>
							</tr>
							<tr>
							    <td>Hematocrit</td>
							    <td><?= $_SESSION['hematocrit']?></td>
							</tr>
						</tbody>
					</table>
                </div>   
	<!-- Fixed footer -->
    <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
    	<div class="container">
    		<div class="navbar-text pull-left">
    			<p>Project by:<b>CHANDAN B S D</b> & <b>DEEKSHITH S G</b></p>
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
    							<input type="text" class="form-control" id="contact-name" value="<?= $_SESSION['fname']." ".$_SESSION['lname']; ?>" placeholder="First & Last Name" name="name">
    						</div>
    					</div>
    					<div class="form-group">
    						<label for="contact-email" class="col-sm-2 control-label">Email</label>
    						<div class="col-sm-10">
    							<input type="email" class="form-control" id="contact-email" value="<?= $_SESSION['email']; ?>" placeholder="example@domain.com" name="email">
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