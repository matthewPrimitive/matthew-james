<?php

if($_POST["submit"]) {
    $recipient="jamesmmatt@gmail.com";
    $subject="Matthew James Website";
    $sender=$_POST["full_name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>
