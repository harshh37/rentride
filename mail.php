<?php
$message="hello"."i am ".$_POST['name'];
$message.=nl2br("\n\r my message for you is:\n ".$_POST['message']."\n\n my mail id is : ".$_POST['email']);
$subject="feedback: ".$_POST['subject'];
if(mail("rentride2018@gmail.com", $subject, $message) ){
?> <h1>your mail sent successfully
thank you for your feedback</h1>
<a href="index.html"> want to go back</a> 

<?php
} else{

?>

<h1>Sorry we are unable to sent your mail</h1>
<a href="index.html"> want to go back</a> 
<?php

}

?>