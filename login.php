<?php
require "config/config.php";
?>
<?php
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
            header("Location:dashbaord.php");
        }
        else{
            echo"invalid username and password";
        }
    }
    
}
 }
 else{
     header("Location:dashbaord.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

</head>
<body>
<?php require "navbar/navbar.php";?>
    <div class ="container">
        <div class="row">
            <div class="col-lg-4">
               </div>

            <div class="col-lg-4">
                <h3>Login</h3><hr>
                <?php if (isset($_GET['msg'])) echo $_GET['msg'];?>
                <form  name="signup" id="signup" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
              
              
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username"class="form-control" placeholder="username" required/>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="password" required/>
                </div>
                <div class="form-group">
                <button name="login" id="login" class="btn btn-primary btn-block">Login</button>
                </div>
                </form>
            </div>
       </div>

        </div>
        </body>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
</html>