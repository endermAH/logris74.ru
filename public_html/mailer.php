<?php

require_once "../vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;


$name = htmlspecialchars($_POST['name']);
$number = htmlspecialchars($_POST['number']);
$problem = htmlspecialchars($_POST['problem']);

$subject = "Новое обращение с сайта lorgis74.ru";

$message =
    "<b>Обращение от:</b> {$name} <br>
     <b>Номер телефона:</b> {$number} <br>
     <b>Текст обращения:</b>{$problem}";

echo $message;

$mailto = "gerakl00@gmail.com";

$mail = new PHPMailer;

//Подключение отладки SMTP.

$mail->SMTPDebug = 3;

//Задаем для PHPMailer использовать SMTP.

$mail->isSMTP();

$mail->CharSet = 'UTF-8';

//Устанавливаем имя хоста SMTP

$mail->Host = "smtp.yandex.com";

//Устанавливаем для этого параметра значение true, если хост SMTP требует аутентификации для отправки почты

$mail->SMTPAuth = true;

//Предоставляем имя пользователя и пароль

$mail->Username = "site@logris74.ru";

$mail->Password = "+7Logris+7";

//Если для SMTP требует шифрование TLS, устанавливаем его

$mail->SMTPSecure = "ssl";

//Устанавливаем порт TCP для подключения

$mail->Port = 465;

$mail->From = "site@logris74.ru";

$mail->FromName = "Logris";

$mail->addAddress($mailto);

$mail->isHTML(true);

$mail->Subject = $subject;

$mail->Body = $message;

$mail->AltBody = $message;

if(!$mail->send())

{
    echo "Ошибка: " . $mail->ErrorInfo;
}

else

{
    echo "Сообщение успешно отправлено";
}

header('Location: http://localhost/contacts.html');