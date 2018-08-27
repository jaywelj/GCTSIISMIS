<?php
if (isset($_POST['btnSend'])) 
{
  include("connectionString.php");
  $mailto = $_POST['txtbxEmail'];
  $mailSub = "Pasword Reset";
  $mailMsg = "Resetting Password Link, <a href='localhost/GCTSIISMIS/admin/production/lostPasswordReset.php?id=".$mailto."'>Click This if you want to reset your password</a>.(Password will be changed to 123) ignore if this wasn't you";
  require 'PHPMailer-master/PHPMailerAutoload.php';
  $mail = new PHPMailer();
  $mail ->IsSmtp();
  $mail ->SMTPDebug = 0;
  $mail ->SMTPAuth = true;
  $mail ->SMTPSecure = 'ssl';
  $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "ocpsdevteam@gmail.com";
   $mail ->Password = "ocpsdevteam123";
   $mail ->SetFrom("ocpsdevteam@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
    $message = "Email Does Not Exist!";
     echo "<script type='text/javascript'>alert('$message');</script>";
     echo "<script type='text/javascript'>location.href = 'login.php';</script>";
   }
   else
   {
    $message = "Check Email For Password Reset Link";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>location.href = 'login.php';</script>";
  }
}








?>