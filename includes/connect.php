<?php
$conn=mysqli_connect("localhost","root","") or die("No connection possible");

mysqli_select_db($conn,"kdbms") or die ("The database does not exist");
?>
