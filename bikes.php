<?php
require "config/config.php";
?>
<?php
session_start();
if($_SESSION['login'])
{
  
    $username=$_SESSION['username'];
   
} 
else{
//redirect on login
header("Location:mylogin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    .vrext{margin-top:10px;
    width:50%;
        float:right;
    padding-left:10px;
    height:180px;
    
}

.content{margin-left:10%;
    background:rgba(31, 29, 36, 0.2);
    margin-top:2%;
}
.content h4{
    margin-left:20px;
    margin-top:20px;
}
.vimg img{
    height:90px;
    width:110px;
}
    .vimg{float:left;
    padding-left:10px;
    margin-left:6%;
    height:200px;
    width:180px;
  
    }
#side{
    position: fixed;
    margin-top: 20%;
    margin-left: 2%;
    height: 60px;
    width: 120px;

}
   #p{background-color: rgb(225, 236, 72);}
   @media only screen and (max-width: 768px) {

    #side{
    opacity:0;
}
   }

    </style>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body>
<?php require "navbar/navbar.php"?>
<img id="side" src="pics/side logo.jpg">
<?php
$con=new mysqli("localhost","riyaz","riyaz","rent") or die("can't connect");;

$veh=$con->query("select * from vehicles ") or die("can't fecth result");
while($row=$veh->fetch_array()){
?>

<div class="container">

<div class="content">
<h4> <?php $name=$row[4]; 
     echo $name;
?></h4>
<div class="vimg"><?php $img_path="pics/".$row["imagep"];?>
<img src="<?php echo $img_path?>" alt="vehicle image">
</div>
<div class="vtext">
    <?php
    $store=$row[1];
    $Address=$row[2];
    $type=$row[3];
   $engine=$row[5];
    $color=$row[6];
  $price=$row[8];
  ?>
  <p id="one"><pre>Store: <?php echo $store;?>      Adress: <?php echo $Address;?></pre></p>
  <p id="two"><pre>Type:<?php echo $type;?>               Engine: <?php echo $engine;?>     Colour: <?php echo $color;?></pre> </p>  
<h4 id="p"><pre>price  Rs<?php echo $price;?></pre></h4>
<div id=b><button  type="button" class="btn btn-outline-primary  btn-lg"><a href="<?php echo "book.php?msg=".$row[0];?>">Take It</a></button>
</div>
</div>
</div>

</div><br> <?php }?>



   <!--Copyright-->
   <div   style="background-color:#222;position:absolute; bottom:0;text-align:center;padding-right:45%;padding-left:45%;"class="footer-copyright py-3 text-center ">
          <div style="color:white;">  © 2018 Copyright:
            <a  href="https://mdbootstrap.com/bootstrap-tutorial/ "> Rent Ride.com </a>
        </div></div>
        <!--/.Copyright-->

        </body>

</html>