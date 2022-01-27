<?php

if(isset($_POST['submit'])) {

    $name= $_POST['name'];
    $date= $_POST['date'];
    $people= $_POST['people'];
    $email= $_POST['email'];
    $time= $_POST['time'];

    $to ='hassan.sh@taskseveryday.com';
    $subjest='New Booking';
    $message ="Name: ".$name."\n"."Date :".$date."\n"."People :"."\n"."Time :".$time;
    $headers="From: ".$email;

    if(mail($to,$subjest,$message,$headers)){
        echo"<h1> Sent Successfully! Thank you"." ".$name.", We Will Contact you shortly</h1>";
    }else {
        echo"Something Went Worng";
    }
}


?>


<?PHP
$email = $_POST["emailaddress"];
$to = "you@youremail.com";
$subject = "New Email Address for Mailing List";
$headers = "From: $email\n";
$message = "A visitor to your site has sent the following email address to be added to your mailing list.\n

Email Address: $email";
$user = "$email";
$usersubject = "Thank You";
$userheaders = "From: you@youremailaddress.com\n";
$usermessage = "Thank you for subscribing to our mailing list.";
mail($to,$subject,$message,$headers);
mail($user,$usersubject,$usermessage,$userheaders);
?>