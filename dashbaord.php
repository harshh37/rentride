<?php
require "config/config.php";
?>
<?php
session_start();
if($_SESSION['login'])
{
    //execute the code
  
    $username=$_SESSION['username'];
   
} 
else{
//redirect on login
header("Location:login.php");
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
<?php require "navbar/navbar.php"?>
<div class="container">
    <h1>HELLO <?php echo $_SESSION['username'];?></h1>
    <p>there is  noyhimg to show<a href="logout.php">LOGOUT</a></p>
    </div>
</body>
</html>