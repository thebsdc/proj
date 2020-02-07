<?php
      include ("includes/connect.php");
      session_start();
      if(!isset($_SESSION['uname'])){
          echo "<script>alert('Donor page could not be accessed')</script>";
           header("location: http://localhost/proj/admin/home_admin.php");
      }else{
          $id=$_GET['id'];
          $query="SELECT * FROM donor WHERE id='$id'";
          $result=mysqli_query($conn,$query);
          if(mysqli_num_rows($result)>0){
          while($d=mysqli_fetch_array($result)){
                  $fname=$d['fname'];
                  $mname=$d['mname'];
                  $lname=$d['lname'];
                  $sex=$d['sex'];
                  $btype=$d['btype'];
                  $dob=$d['dob'];
                  $address=$d['address'];
                  $city=$d['city'];
                  $mobile=$d['mobile'];
                  $email=$d['email'];
          }}
          $query1="SELECT * FROM donormed WHERE id=$id";
          $result1=mysqli_query($conn,$query1);
          if(mysqli_num_rows($result1)>0){
            while($l=mysqli_fetch_array($result1)){ 
                  $don_date=$l['don_date'];
                  $stats=$l['stats'];
                  $temp=$l['temp'];
                  $pulse=$l['pulse'];
                  $bp=$l['bp'];
                  $weight=$l['weight'];
                  $hemoglobin=$l['hemoglobin'];
                  $hbsag=$l['hbsag'];
                  $aids=$l['aids'];
                  $malaria_smear=$l['malaria_smear'];
                  $hematocrit=$l['hematocrit'];
              
          }
          
}}?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kidney center Admin Management</title>
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
          <a class="navbar-brand" href="#">Kidney center Admin Management</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="home_admin.php">Home</a></li>
            <li class="active"><a href="donor_admin.php">Reg. Donors</a></li>  
            <li><a href="contact_admin.php">Messages</a></li>
            <li><a href="logout_admin.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <h3>COMPLETE DONOR INFORMATION</h3>
    <div class='panel panel-default'>
					<div class='panel-heading'>
						<h3 class='panel-title'>PERSONAL DETAILS</h3>
					</div>
					<table class='table table-bordered table-striped'>
						<tbody>
							<tr>
								<td>ID</td>
								<td><?= $id; ?></td>
							</tr>
							<tr>
								<td>Name</td>
								<td><?= $fname." ".$mname." ".$lname; ?></td>
							</tr>	
							<tr>
								<td>Gender</td>
								<td><?= $sex; ?></td>
							</tr>
							<tr>
								<td>Blood Type</td>
								<td><?= $btype; ?></td>
							</tr>
							<tr>
								<td>DOB</td>
								<td><?= $dob; ?></td>
                            <tr>
								<td>Address</td>
								<td><?= $address; ?></td>
							</tr>
                            <tr>
								<td>City</td>
								<td><?= $city; ?></td>
							</tr>
                            <tr>
								<td>Mobile</td>
								<td><?= $mobile; ?></td>
							</tr>
							<tr>
							    <td>Email</td>
							    <td><?= $email; ?></td>
							</tr>
						</tbody>
					</table>
                </div>   <br><br>
				
         <div class='panel panel-default'>
					<div class='panel-heading'>
						<h3 class='panel-title'>MEDICAL INFORMATION</h3>
					</div>
					<table class='table table-bordered table-striped'>
						<tbody>
							<tr>
								<td>Previous donation date</td>
								<td><?= $don_date; ?></td>
							</tr>
							<tr>
								<td>Stats</td>
								<td><?= $stats; ?></td>
							</tr>	
							<tr>
								<td>Temperature</td>
								<td><?= $temp; ?></td>
							</tr>
							<tr>
								<td>Pulse</td>
								<td><?= $pulse; ?></td>
							</tr>
							<tr>
								<td>Blood Pressure</td>
								<td><?= $bp; ?></td>
                            <tr>
								<td>Weight</td>
								<td><?= $weight; ?></td>
							</tr>
                            <tr>
								<td>Hemoglobin level</td>
								<td><?= $hemoglobin; ?></td>
							</tr>
                            <tr>
								<td>hbsag</td>
								<td><?= $hbsag; ?></td>
							</tr>
							<tr>
							    <td>AIDS</td>
							    <td><?= $aids; ?></td>
							</tr>
							<tr>
							    <td>Malaria Smear</td>
							    <td><?= $malaria_smear; ?></td>
							</tr>
							<tr>
							    <td>Hematocrit</td>
							    <td><?= $hematocrit; ?></td>
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
    
   
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>