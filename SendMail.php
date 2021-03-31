<?php

if(isset($_POST['send'])){
    
//getting details from the input and storing in a variable...

$fullnames = trim($_POST['fname']);
$email = trim($_POST['email']);
$subject = trim($_POST['subject']);
$message = trim($_POST['message']);

//checking if fields are empty..
if(empty($fullnames) || empty($email) || empty($subject) || empty($message)){
    header('location:index.php?error');
}

else{

    $header ="From: " . $email;

    //E-mail your sendinging to 
    //Subject
    //The message

    //my email..
    $to = "info@geniustech.me";

    if(mail($to, $subject, $message, $header)){
            header('location:index.php?success');
    }
}

}
else{
    header('location:index.php');
}

?>