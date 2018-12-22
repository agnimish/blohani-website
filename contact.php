<?php
    if($_POST["submit"]) {
        $recipient="nimishagarwal.1997@gmail.com";
        $senderName=$_POST["name"];
        $senderEmail=$_POST["email"];
        $subject=$_POST["subject"];
        $message=$_POST["message"];
    
        $mailBody="Name: $senderName \n Email: $senderEmail\n\n$message";
    
        mail($recipient, $subject, $mailBody, "From: $senderName <$senderEmail>");
    
        $thankYou="<p>Thank you! Your message has been sent.</p>";
    }
?>
