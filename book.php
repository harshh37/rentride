<?php

define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DBNAME","riyaz");

$con=mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME) or die("cannot connect to database");
 
if ($con)
{
    echo"connected";
}

?>

<!DOCTYPE html>
<html lang="en">



<head>
   

    <meta charset="UTF-8">
    <title>Basic hotel booking form</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="css/style1.css">
    <style>
    #my_file{
        width:auto;
            font-size: 18px;
            color: #00ff4e;
  
    }
   #my_file1{
    width:auto;
            font-size: 18px;
            color: #00ff4e;
  

   }
   #sub{
    width:10%;
            padding: 10px;
            background-color: #0abdf7;
            color:white;
            font-size: 20px;
            text-shadow: 2px 2px 3px #000;
   }
   #sub:hover{
    box-shadow: 1px 1px 2px grey;
   }
    </style>


</head>

<body>

<?php require "navbar/navbar.php";
?>

    <form enctype="multipart/form-data" method="POST" action="bookaction.php">
        <!--  General -->
        <div class="form-group">
            <h2 class="heading">Booking & contact</h2>
            <div class="controls">
                <input type="text" id="name" class="floatLabel" name="name">
                <label for="name">Name</label>
            </div>
            <div class="controls">
                <input type="text" id="email" class="floatLabel" name="email">
                <label for="email">Email</label>
            </div>
            <div class="controls">
                <input type="tel" id="phone" class="floatLabel" name="phone">
                <label for="phone">Phone</label>
            </div>

            <!--  Details -->
            <div class="form-group">
                <h2 class="heading">Details</h2>
                <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="date" id="arrive" class="floatLabel" name="from" value="<?php echo date('Y-m-d'); ?>">
                            <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;from</label>
                        </div>
                    </div>
                    <div class="col-1-4 col-1-4-sm">
                        <div class="controls">
                            <input type="date" id="depart" class="floatLabel" name="to" value="<?php echo date('Y-m-d'); ?>" />
                            <label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;to</label>
                        </div>
                    </div>
                </div>
                <label for="my_file">ID photo</label>
                <input type="file" name="my_file" id="my_file">
                
                <br><br><label for="my_file1">DL photo</label>

                <input type="file" name="my_file1" id="my_file1">
                <input type="hidden" name="msg" value="<?php echo $_GET['msg'];?>">

                <div class="grid">
                    <p class="info-text">Please describe your needs e.g. Helmets,bikes conditions,etc.</p>
                    <br>
                    <div class="controls">
                        <textarea name="comments" class="floatLabel" id="comments"></textarea>
                        <label for="comments">Comments</label>
                    </div>
                    <button type="submit" value="Submit" id="sub" name="submit" class="col-1-4">Submit</button>
                </div>
            </div>
            <!-- /.form-group -->
    </form>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery-ui-autocomplete.js'></script>
    <script src='http://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery.select-to-autocomplete.js'></script>
    <script src='http://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery.select-to-autocomplete.min.js'></script>



    <script src="js/index.js"></script>




</body>

</html>