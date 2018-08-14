<?php
require "config/config.php";
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Login V17</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
        <!--===============================================================================================-->
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        <!--===============================================================================================-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">

    </head>
   
<?php require "navbar/navbar.php";?>
    <body>
 

        <div style="margin-top:-20px;" class="limiter">
            <div class="container-login100">
                <div  class="wrap-login100">

                    <?php if (isset($_GET['msg'])) echo $_GET['msg'];?>
                    <form style="margin-top:-15%;" name="signup" class="login100-form " id="signup" action="config/action.php" method="POST">

                        <span class="login100-form-title p-b-34">
						Sign Up
					</span>

                        <div class="wrap-input100 rs3-wrap-input100 " style="margin-bottom:40px;">
                            <input id="first-name" class="input100" type="text" name="fullname" placeholder="Full name" required>
                            <span class="focus-input100"></span>
                            <?php if (isset($_GET['fmsg'])){?>
                        <label for="fullname" style="color :red; font-family:Apple Chancery, cursive;"><?php  echo $_GET['fmsg'];?></label>
                          <?php }?>
                        </div>
                        <div class="wrap-input100 rs3-wrap-input100 " style="margin-bottom:40px;">
                            <input class="input100" type="email" name="email" placeholder="E-mail" required>
                            <span class="focus-input100"></span>
                            <?php if (isset($_GET['emsg'])){?>
                        <label for="email" style="color :red; font-family:Apple Chancery, cursive;"><?php  echo $_GET['emsg'];?></label>
                         <?php }?>
                        </div>
                        <div class="wrap-input100 rs3-wrap-input100  " style="margin-bottom:40px;">
                            <input class="input100" type="text" name="username" placeholder="username" required>
         
                           <span class="focus-input100"></span> <!--to get  green box of focus on current div- "wrap-input100"-->
                           <?php if (isset($_GET['umsg'])){?>
                        <label for="username" style="color :red; font-family:Apple Chancery, cursive;"><?php  echo $_GET['umsg'];?></label>
                         <?php }?>
                        </div>
                        <div class="wrap-input100 rs4-wrap-input100  " style="margin-bottom:40px;">
                            <input class="input100" type="password" name="password" placeholder="Password" required>
                            <span class="focus-input100"></span>
                            <?php if (isset($_GET['pmsg'])){?>
                        <label for="password" style="color :red; font-family:Apple Chancery, cursive;"><?php  echo $_GET['pmsg'];?></label>
                        <?php }?>
                        </div>





                        <div class="container-login100-form-btn " style=" margin-bottom:40px; ">
                            <button class="login100-form-btn" name="submit" id="submit">
							Sign up 
						</button>
                        </div>



                        <div class="w-full text-center">
                            <a href="mylogin.php" class="txt3">
							Sign in
						</a>
                        </div>
                    </form>
                    <div class="login100-more" style="background-image: url('img/w.jpg');"></div>
                </div>



            </div>
        </div>






    </body>

    </html>