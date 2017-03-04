<?php
/**
 * This example shows sending a message using PHP's mail() function.
 */
$varfname=$_POST["fullname"];
$varln=$_POST["faddress"];
$varmail=$_POST["fpincode"];
$varmail=$_POST["fcontact"];
$varmailf=$_POST["ffmail"];

require '../PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->SMTPSecure = "tls";
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->Port = 587; // Set the SMTP port i tried and 457
$mail->Username = 'dheerajrtx@gmail.com';                // SMTP username
$mail->Password = 'hellboy123';


//Set the subject line
$mail->Subject = 'Thanks for buying from UnPolluted';
$mail->setFrom('dheerajrtx@gmail.com', 'Unpolluted Sales');
$mail->addAddress($varmailf, $varfname);
$mail->msgHTML("Thanks");
//send the message, check for errors
if (!$mail->send()) {
    $mailmessage= "Mailer Error: " . $mail->ErrorInfo;
} else {
    $mailmessage="Message sent!";
}


?>




hello this is something amazing here
