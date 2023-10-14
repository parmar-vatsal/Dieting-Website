<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/signin.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <title>Register - mvadiet</title>
   </head>
   <body>
      <div class="login">
         <img src="assets/images/login-bg.png" alt="login image" class="login__img">

         <form class="login__form" method="POST" style="background-color: hsl(31, 84%, 50%);">
            <h1 class="login__title">Register</h1>

            <div class="login__content">
               <div class="login__box">
                  <i class="ri-user-3-line login__icon"></i>
                  <div class="login__box-input">
                     <input type="text" required class="login__input" name="full_name" placeholder=" ">
                     <label for="" class="login__label">Full Name</label>
                  </div>
               </div>

               <div class="login__box">
                    <i class="fa-regular fa-envelope"></i>
                    <div class="login__box-input">
                        <input type="email" required class="login__input" name="email_address" placeholder=" ">
                        <label for="" class="login__label">Email</label>
                    </div>
                </div>

               <div class="login__box">
                  <i class="ri-lock-2-line login__icon"></i>
                  <div class="login__box-input">
                     <input type="password" required class="login__input" id="login-pass" name="password" placeholder=" ">
                     <label for="" class="login__label">Create Password</label>
                     <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                  </div>
               </div>

               <div class="login__box">
                  <i class="ri-lock-2-line login__icon"></i>
                  <div class="login__box-input">
                     <input type="password" required class="login__input" name="Confirm_password" id="login-pass" placeholder=" ">
                     <label for="" class="login__label">Confirm Password</label>
                     <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                  </div>
               </div>

            </div>

            <div class="login__check">
               <div class="login__check-group">
                  <input type="checkbox" class="login__check-input">
                  <label for="" class="login__check-label">Remember me</label>
               </div>
            </div>

            <button type="submit" class="login__button" name="Signup_button">Register</button>

            <p class="login__register">
               already have an account? <a href="Signin.php">Login</a>
            </p><br>

            <?php

               include('connection.php');
               if(isset($_POST['Signup_button']))
               {
        	         $name = $_POST['full_name'];
                  $email = $_POST['email_address'];
        	         $pass = $_POST['password'];
                  $cpass  = $_POST['Confirm_password'];
                  
        
                  if ($pass == $cpass)
                  {
                     $sql = "INSERT INTO login VALUES('".$name."','".$email."','".$pass."')";
                     $que = "SELECT * FROM login WHERE Email = '".$email."'";
                     $result = mysqli_query($con,$que);
                     if(mysqli_num_rows($result) > 0)
                     {
                        echo "<center>User Already Exist.</center>";
                     }
                     else
                     {
                        mysqli_query($con, $sql);
                        echo "Register Successfully.";
                        header("location: Signin.php");
                     }
                  }
                  else
                  {
                     echo "<center>Confirm Password are not Match</center>";
                  }
               }
               $con->close();
            ?>

            
         </form>
      </div>
      
      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>

   </body>
</html>