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
      <link rel="shortcut icon" href="assets/images/favicon.png" type="image/svg+xml">

      <title>Register - mvadiet</title>
   </head>
   <body>
      <div class="login">
         <img src="assets/images/login-bg.png" alt="login image" class="login__img">

         <form class="login__form" method="POST" style="background-color: hsl(31, 84%, 50%);">
            <h1 class="login__title">Forget Password</h1>
            <div class="login__content">
               <div class="login__box">
                    <i class="ri-lock-2-line login__icon"></i>
                    <div class="login__box-input">
                        <input type="password" required class="login__input" id="login-pass" name="password" placeholder=" ">
                        <label for="" class="login__label">Create New Password</label>
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
            <button type="submit" class="login__button" name="reset_button">Forget Password</button>
            
            <?php
                error_reporting(0);
                include("connection.php");
                if(isset($_REQUEST["reset_button"]))
	            {	

    	        $pass = $_POST["password"];
                $cpass = $_POST["Confirm_password"];

                    if($pass == $cpass)
                    {
                        $qr2 = "update login set password='".$pass."' where Email='".$_SESSION['email']."'";
                        mysqli_query($con,$qr2);
                        header("location:Signin.php");		
                    }		        
                    else
                    {
                        echo "Password and Confirm Password not match!!";
                    }
                }						
            ?>
            
         </form>
      </div>
      
      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>

   </body>
</html>