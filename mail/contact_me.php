<?php
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.google.com';  // Specify your SMTP server
$mail->SMTPAuth = true;
$mail->Username = 'tarekelkhoury99@gmail.com'; // SMTP username
$mail->Password = 'Nouriandabouri18'; // SMTP password
$mail->SMTPSecure = 'tls'; // Enable TLS encryption; `ssl` also accepted
$mail->Port = 587; // TCP port to connect to

$mail->setFrom("$email_address", "$name"); // Sender's email address and name
$mail->addAddress('tarekelkhoury99@gmail.com', 'Tarek El Khoury'); // Recipient's email address and name

$mail->isHTML(true); // Set email format to HTML

$mail->Subject = "Website Contact Form:  $name";
$mail->Body    = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";

if($mail->send()) {
	return true;
} else {
    return false;
}
?>