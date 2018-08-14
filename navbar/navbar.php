<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.html">Rent Ride</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="bikes.php">Bikes</a></li>
        <li><a href="stores.php">Stores</a></li>
         <li><a href="scooties.php">Scooties</a></li> 
         <li><a href="specials.php">Specials</a></li> 
         <li><a href="about.php">About Us</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
        <?php if(isset($_SESSION['login'])){?>

<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> <?php echo $_SESSION['username'];?></a></li>
       <?php } else {?>
        <li><a href="mylogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>