<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\Exception;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/PHPMailer/src/Exception.php';
require '/PHPMailer/src/PHPMailer.php';
require '/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
	if($_POST['message'] == ''){
		echo "string";
		die;
	}
    $email_to =         $_POST['email'];
    $email_subject =    (isset($_POST['subject']) ? $_POST['subject'] : "contact US request from vallabhdhola");
    $email_from =       $_POST['email'];
    $emailer_name =     $_POST['name']; 
    $email_message = "<tr><td>Contact Name :</td><td> ".$emailer_name. "</td></tr>";
    $email_message .= "<tr><td>Contact Phone :</td><td> ".$_POST['phone']. "</td></tr>";
    $email_message .=   "<b>" .$_POST['message']."</b>";


    //Recipients
    $mail->addReplyTo($email_from,$emailer_name);
    $mail->addAddress($email_to);     // Add a recipient
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $email_subject;
    $mail->Body    = $email_message;
    $mail->send();
    var_dump($mail);
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
    // header("Location: /brushed/contact.php");
    // exit();
 ?>
