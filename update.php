<?php
require "config/config.php";
?>
<?php
if (isset($_GET['upd'])){
    $id=$_GET['upd'];

    $query="SELECT * FROM users WHERE id=$id";
    $fire=mysqli_query($con,$query) or die("cannot fetch the data".mysqli_error($con));
   $user=mysqli_fetch_assoc($fire);
   
}
?>
<!--Update data-->
<?php
if (isset($_POST['update']))
{
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $admin=$_POST['admin'];
     
    $query="UPDATE users SET fullname='$fullname',username='$username',email='$email',password='$password' ,admin='$admin' WHERE id=$id";
    $fire=mysqli_query($con,$query);
  if ($fire>0) header("Location:admin.php");
  else echo "not updated...";
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
    <div class ="container">
        <div class="row">
            <div class="col-lg-4">
</div>
               
            <div class="col-lg-4">
                <h3>Update Data</h3><hr>
                <form  name="signup" id="signup" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
              
                <div class="form-group">
                    <label for="fullname">Fullname</label>
                    <input   type="text" id="fullname" name="fullname" class="form-control" placeholder="fullname" />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input   value="<?php echo $user['email']?>" type="email" id="email" name="email" class="form-control"placeholder="email" required/>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input  value="<?php  echo $user['username']?>" type="text" id="username" name="username"class="form-control" placeholder="username" required/>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder=" Enter new password" required/>
                </div>  
                <div class="form-group">
                    <label for="admin-type">Admin (0/1)</label>
                    <input type="text" id="admin" name="admin" class="form-control" placeholder=" Enter new admin-type" required/>
                </div>
                <div class="form-group">
                <button name="update" id="update" class="btn btn-primary btn-block">Update</button>
                </div>
</div>
</div>
</div>

</body>
</html>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     