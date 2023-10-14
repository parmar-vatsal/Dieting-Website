<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/signin.css">

      <title>Login - mvadiet</title>
   </head>
   <body>
      <div class="login">
         <img src="assets/images/login-bg.png" alt="login image" class="login__img">

         <form class="login__form" method="POST" style="background-color: hsl(31, 84%, 50%);">
            <h1 class="login__title">Login</h1>

            <div class="login__content">
               <div class="login__box">
                  <i class="ri-user-3-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="email" required class="login__input" name="email" placeholder=" ">
                     <label for="" class="login__label">Email</label>
                  </div>
               </div>

               <div class="login__box">
                  <i class="ri-lock-2-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="password" required class="login__input" name="password" id="login-pass" placeholder=" ">
                     <label for="" class="login__label">Password</label>
                     <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                  </div>
               </div>
            </div>

            <div class="login__check">
               <div class="login__check-group">
                  <input type="checkbox" class="login__check-input">
                  <label for="" class="login__check-label">Remember me</label>
               </div>

               <a href="forget.php" class="login__forgot">Forgot Password?</a>
            </div>

            <button type="submit" class="login__button" name="login_button">Login</button>

            <p class="login__register">
               Don't have an account? <a href="Signup.php">Register</a>
            </p>
            <?php

               include('connection.php');
               error_reporting(0);
               if($_SESSION['name'] == NULL)
               {
                  if(isset($_POST['login_button']))
                  {
        	            $email = $_POST['email'];
        	            $pass = $_POST['password'];
                  
        	            $qr1 ="select * from login where email='".$email."' and password='".$pass."'";

        	            $result1 = mysqli_query($con,$qr1);

        	            if(mysqli_num_rows($result1) > 0)
        	            {		
        	            	$row = mysqli_fetch_array($result1);
        	            	$_SESSION['name'] = $row[0];
        	            	$_SESSION['email'] = $row[1];
        	            	header("location:index.php");
        	            }
        	            else
        	            {   
        	            	echo "<br><center>Wrong Username or Password..!!</center>".mysqli_error($con);	
        	            }
                  }
               }
               else
               {
                  header('location:index.php');
               }
            ?>
         </form>
      </div>
      
      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>


   </body>
</html>