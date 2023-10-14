<?php

  error_reporting(0);
  $con = mysqli_connect("localhost","root","","mvadiet");

  $name = $_REQUEST['full_name'];
  $email = $_REQUEST['email_address'];
  $weight = $_REQUEST['weight'];
  $date = $_REQUEST['booking_date'];
  $message = $_REQUEST['message'];
  
  if (isset($_REQUEST['Submit']))
  {
    $que = "insert into booking values('".$name."','".$email."','".$weight."','".$date."','".$message."')";
    mysqli_query($con, $que);
  }

?>