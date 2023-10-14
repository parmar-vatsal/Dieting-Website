<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/signin.css">
      <link rel="shortcut icon" href="assets/images/favicon.png" type="image/svg+xml">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <title>Register - mvadiet</title>
   </head>
   <body>
      <div class="login">
         <img src="assets/images/login-bg.png" alt="login image" class="login__img">

         <form class="login__form" method="POST" style="background-color: hsl(31, 84%, 50%);">
            <h1 class="login__title">Forget Password</h1>
            <div class="login__content">
               <div class="login__box">
                    <i class="fa-regular fa-envelope"></i>
                    <div class="login__box-input">
                        <input type="email" required class="login__input" name="email_address" placeholder=" ">
                        <label for="" class="login__label">Email</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="login__button" name="forget_button">Forget Password</button>
            
            <?php
                include("connection.php");
                if(isset($_POST['forget_button']))
                {
                	$_SESSION['email']=$_POST['email_address'];
                    $qr1 ="select * from login where Email='".$_SESSION['email']."'";

                	$result1 = mysqli_query($con,$qr1);
                
                	if(mysqli_num_rows($result1) > 0)
                	{		
                		//$row = mysqli_fetch_array($result1);
                        header("location:rest.php");
                    }
                    else
                	{   
                		echo "<br><center>Wrong Email.!!</center>".mysqli_error($con);	
                	}
                }

            ?>
            
         </form>
      </div>
      
      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>

   </body>
</html>