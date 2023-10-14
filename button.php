<?php 
include('connection.php');
$message = "";
error_reporting(0);
if($_SESSION['email'] == NULL)
{
  // header('Location:index.php');
  $message = "
    <html>
    <body>
    <a href='Signin.php'><button class='btn btn-hover'>Sign In</button></a>
    </body>
    </html>
  ";
}
else{
  $message = "
  <html>
  <body>
  <a href='logout.php'><button class='btn btn-hover'>Logout</button></a>
  </body>
  </html>
  ";
}
?>