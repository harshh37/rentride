<?php
require "config.php";
?>
<?php
if ((isset($_POST['submit']))){
    //this code will be executed
    $fmsg="";
    $emsg="";
    $umsg="";
    $pmsg="";
    
    $fullname=mysqli_real_escape_string($con,trim($_POST['fullname']));
    $email=mysqli_real_escape_string($con,trim($_POST['email']));
    $username=mysqli_real_escape_string($con,trim($_POST['username']));
    $password=mysqli_real_escape_string($con,trim($_POST['password']));

    $fullname_valid= $email_valid=$username_valid=$password_valid= false;

    //check fullname
    if(!empty($fullname)){
        if(strlen($fullname)>2 && strlen($fullname)<=20){
            if(!preg_match('/[^a-zA-Z\s]/',$fullname)){

                //all test passed
                $fullname_valid=true;

            } else{ $fmsg .="fullname can contain only alphabets <br>"; }
        } else{ $fmsg .="length should be in between 2 to 30<br>";}
        } else{$fmsg .="fullname cannot be blank<br>"; }
    
    //check email
    if(!empty($email)){
        

                //all test passed
                $email_valid=true;

            }
            else{
                $emsg .="email cannot be blank <br>"; }
    

    //check username
    if(!empty($username)){
        if(strlen($username)>2 && strlen($username)<=20){
            if(!preg_match('/[^a-zA-Z\d_.]/',$username)){

                
                

            $query="SELECT username FROM users WHERE username='$username'";
            $fire=mysqli_query($con,$query)or die("cannot fire query".mysqli_error($con));

            if (mysqli_num_rows($fire)>0){
                $umsg .="Username is not available";
            }
            else{
                $username_valid=true; }

            } else{
                $umsg .="username can contain alphabets,underscore,periods'.' ,symbols <br>";}
        }else{
            $umsg .="length should be in between 2 to 30<br>";   }
    }  else{
        $umsg .="username cannot bbe blank<br>";
        }


//check password
if(!empty($password)){
    if(strlen($password)>2 && strlen($password)<=15){

            //all test passed
            $password_valid=true;
            $password=md5($password);

        }  
         else{
            $pmsg .="length should be in between 2 to 15";
        }
    } else{
        $pmsg .="password cannot be blank";
    }



    if($fullname_valid && $username_valid && $email_valid && $password_valid)
    {

        $query="INSERT INTO users(fullname,username,email,password) VALUES('$fullname','$username','$email','$password')";
    $fire=mysqli_query($con,$query)or die("cannot insert data into database".mysqli_error($con));

      if($fire) 
      
      {
    
         header("Location:../mylogin.php");
       }
       
    }else{
        header("Location:../signup.php?fmsg=".$fmsg."&emsg=".$emsg."&umsg=".$umsg."&pmsg=".$pmsg);
       }
    
}
?>