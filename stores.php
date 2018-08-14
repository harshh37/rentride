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
    background: rgba(73, 163, 236, 0.2);
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


.rating-static {
  width: 60px;
  height: 16px;
  display: block;
  background: url('pics/star.png') 0 0 no-repeat;
}
.rating-50 { background-position: 0 0; }
.rating-40 { background-position: -12px 0; } 
.rating-30 { background-position: -24px 0; }
.rating-20 { background-position: -36px 0; }
.rating-10 { background-position: -48px 0; }
.rating-0 { background-position: -60px 0; }
.rating-5  { background-position: -48px -16px; }
.rating-15 { background-position: -36px -16px; }
.rating-25 { background-position: -24px -16px; }
.rating-35 { background-position: -12px -16px; }
.rating-45 { background-position: 0 -16px; }
    </style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body><?php require "navbar/navbar.php"?>
<img id="side" src="pics/stside logo.jpg">
<?php
$con=new mysqli("localhost","root","","rent") or die("can't connect");;

$veh=$con->query("select * from stores") or die("can't fecth result");
while($row=$veh->fetch_array()){
?>

<div class="container">

<div class="content">
<h4> <?php $name=$row[1]; 
     echo $name;
?></h4>
<div class="vimg"><?php $img_path="pics/".$row["image"];?>
<img src="<?php echo $img_path?>" alt="vehicle image">
</div>
<div class="vtext">
    <?php
    $stars=$row[2];
    $Address=$row[3].', '.$row[4].', '.$row[5].', '.$row[6];
    
  
    $time=$row[7];
    $day=$row[8];

  ?>
  <p id="one"><pre> Adress: <?php echo $Address;?></pre></p>
  <p id="two"><pre>Timings:<?php echo $time;?>  (<?php echo $day;?>)</pre> </p>  
  <span style="margin-left:10%;margin-top:55px;" class="rating-static rating-<?php echo $stars;?>"></span>
<div id=b><button style="margin-left:40%;margin-top:-30px;" type="button" class="btn btn-outline-secondary  btn-lg"><a href="<?php echo "vstores.php?msg=".$row[0];?>">Choose Store</a></button>
</div>
<br>
</div>
</div>

</div><br> <?php }?>
<br>





<center><h1>OUR STORES</h1></center>

     <!--Google map-->
     <div id="map-container " class="z-depth-1-half map-container mb-5 " style="height: 400px; width:95%;margin-left:2%; margin-right:2%; "></div>

</div>
<!--Grid column-->
  <!--Copyright-->
  <div   style="background-color:#222;position:absolute; bottom:0;text-align:center;padding-right:45%;padding-left:45%;"class="footer-copyright py-3 text-center ">
          <div style="color:white;">  © 2018 Copyright:
            <a  href="https://mdbootstrap.com/bootstrap-tutorial/ "> Rent Ride.com </a>
        </div></div>
        <!--/.Copyright-->


 <script src="https://maps.google.com/maps/api/js?key=AIzaSyCe_dlb7aAPar4o5p_q0VaosyvvqOvfhQ4&callback=initMap"></script>
<script>
        // Regular map
        function regular_map() {
            var var_location = new google.maps.LatLng(30.3984, 78.0748);
            var var_location1 = new google.maps.LatLng(40.3984, 48.0748);
            var var_location2 = new google.maps.LatLng(60.3984, 88.0748);
            var var_location3 = new google.maps.LatLng(20.3984, 48.0748);
            var var_mapoptions = {
                center: var_location,
                zoom: 2
            };

            var var_map = new google.maps.Map(document.getElementById("map-container "),
                var_mapoptions);

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "Dehradun "
            });
            var var_marker1 = new google.maps.Marker({
                position: var_location1,
                map: var_map,
                title: "Dehradun1 "
            });
            var var_marker2 = new google.maps.Marker({
                position: var_location2,
                map: var_map,
                title: "Dehradun2 "
            });
           
            var var_marker3 = new google.maps.Marker({
                position: var_location3,
                map: var_map,
                title: "Dehradun2 "
            });
           
        }

        // Initialize maps
        google.maps.event.addDomListener(window, 'load', regular_map);
    </script>
     

        </body>

</html>