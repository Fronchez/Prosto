<?php 

require_once 'connect.php';
header("Content-type: application/json; charset=utf-8");

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$dbo->query("INSERT INTO `request` (`id`, `name`, `phone`, `email`) VALUES (NULL, '$name', '$phone', '$email');");

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'rostov.audio@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'KZ8Kky3@uq'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('rostov.audio@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('pudeyan2000@mail.ru');     // Кому будет уходить письмо 
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка на запись';
$mail->Body    = '' .$name. ' оставил заявку, его телефон: ' .$phone. ' и почта: ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
}
?>