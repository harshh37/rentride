<?php
require "config/config.php";
?>


<!--DELETE DATA-->
<?php
if ((isset($_GET['del'])))
{
   $id=$_GET['del'];
   $query="DELETE FROM users WHERE id= $id";
   $fire=mysqli_query($con,$query)or die("cannot delete data from database".mysqli_error($con));
   if ($fire) echo"data is deleted from database";
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
<!--navbar-->
<?php require "navbar/navbar.php";?>
<body>
    <div class ="container">
        <div class="row">
            <div class="col-lg-8">
                <h3>User Data</h3>
                <hr>
                <table class="table table-striped">
    <thead>
      <tr>
        <th>Fullname</th>
        <th>Username</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    <?php

       $query="SELECT * FROM users";
       $fire=mysqli_query($con,$query)or die("cannnot fetch data from database".mysqli_error($con));
       //if ($fire) echo "we got the data from database";
       if (mysqli_num_rows($fire)>0)
        {
    

           while($users=mysqli_fetch_assoc($fire)) {?>
             
                <tr>
                  <td><?php echo $users['fullname'];?></td>
                  <td><?php echo $users['username'];?></td>
                  <td><?php echo $users['email'];?></td>
                  <td><a href="<?php $_SERVER['PHP_SELF']?>?del=<?php echo $users['id']?>"class="btn btn-danger" >Delete </td>
                  <td><a href="update.php?upd=<?php echo $users['id']?>" class="btn btn-warning">Update</a></td>
                </tr>

                <?php
              }
          }
     

    ?>   
    </tbody>
  </table>
                

            </div>

            <div class="col-lg-4">
                <h3>Sign Up</h3><hr>
                <?php if (isset($_GET['msg'])) echo $_GET['msg'];?>
                <form  name="signup" id="signup" action="config/action.php" method="POST">
              
                <div class="form-group">
                    <label for="fullname">Fullname</label>
                    <input type="text" id="fullname" name="fullname" class="form-control" placeholder="fullname" required/>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control"placeholder="email" required/>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username"class="form-control" placeholder="username" required/>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="password" required/>
                </div>
                <div class="form-group">
                <button name="submit" id="submit" class="btn btn-primary btn-block">SignUp</button>
                </div>
                </form>
            </div>
       </div>

        </div>
        </body>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
</html>