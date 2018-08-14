

<head>
<style>
tr{margin-top:7%;
    background-color: rgba(78,78,78,0.3);
 }

 #h{
  background-color: rgba(158,208,158,0.6);
  
 }

</style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
require "config/config.php";
?>
<?php
if ((isset($_GET['del'])))
{
   $id=$_GET['del'];
   $query="DELETE FROM users WHERE id= $id";
   $fire=mysqli_query($con,$query)or die("cannot delet data from database".mysqli_error($con));
   if (!$fire) ?> <div style=" float:bottom;" <?php  echo"data can't be deleted from database"; ?></div>
<?php } 

?>

</head>
<body> <div class="col-lg-8" style="height:100%; width:100%;">  
<a href="logout.php" style="background-color:rgba(79, 145, 214,0.4);color:rgb(210, 79, 90);float:right;" class="btn  btn-floating btn-lg purple-gradient">Logout</a>
                <h3>User Data</h3>
                <hr>
                <table class="table table-striped">
    <thead>
      <tr id="h">
        <th>Fullname</th>
        <th>Username</th>
        <th>Email</th>
        
        <th>Admin type</th>
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
                  <td><?php echo $users['admin'];?></td>
                  <td><a href="<?php $_SERVER['PHP_SELF']?>?del=<?php echo $users['id']?>"class="btn btn-danger" >Delete </td>
                  <td><a href="update.php?upd=<?php echo $users['id']?>" class="btn btn-warning">Update</a></td>
                </tr>

                <?php
              }
          }
     

    ?>   
    </tbody>
  </table>
                

            </div>    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></body>
         
