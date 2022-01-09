<?php

if($_POST["submit"]) {
    $recipient="luki.maar@gmail.com";
    $subject="KAI WEB: Nova prihlaska na CISCO";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];
    $mailBody="Student $sender (Email: $senderEmail) $message";
    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>