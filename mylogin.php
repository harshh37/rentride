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

    <!--php connection===============================================================================================-->

<?php
require "config/config.php";
?>
<?php $msg="";
 session_start();
 if(!isset($_SESSION['login'])){
if (isset($_POST['login']))
{
    $username=mysqli_real_escape_string($con,trim($_POST['username']));
    $password=mysqli_real_escape_string($con,md5(trim($_POST['password'])));

    $query="SELECT *FROM users WHERE username='$username' and password='$password'";
    $fire=mysqli_query($con,$query);
    if ($fire) {
        if (mysqli_num_rows($fire)==1)
        {
           
            $_SESSION['login']=true;
            $_SESSION['username']=$username;
            header("Location:index.html");
        }
        else{
            $msg="invalid username and password";
        }
    }
    
}
 }
 else{
     header("Location:index.html");
 }
?>


</head>

<body>
<?php require "navbar/navbar.php";?>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
              
                <?php if (isset($_GET['msg'])) echo $_GET['msg'];?>
                <form class="login100-form validate-form" name="signup" id="signup" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
              
                    <span class="login100-form-title p-b-34">
						Account Login
					</span>
                    <div  class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
                        <input id="first-name" class="input100" type="text" name="username" placeholder="User name"   required>
                        <span class="focus-input100"></span>
                    </div>
                    <div  class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password"  required>
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" style="margin-bottom:40px;" ></span>
                    </div>
                   
                    <?php if ($msg!=""){?>
                        <label for="password" style="color :red; font-family:Apple Chancery, cursive;"><?php  echo $msg;?></label>
                        <?php }?>
                        

                    <div class="container-login100-form-btn" style="margin-bottom:40px;margin-top:40px;">
                        <button name="login" class="login100-form-btn">
							Sign in
						</button>
                    </div>
              
                    

                    <div class="w-full text-center">
                        <a href="signup.php" class="txt3">
							Sign Up
						</a>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('img/w.jpg');"></div>
            </div>
        </div>
    </div>



    

    <!--===============================================================================================-->



</body>

</html>