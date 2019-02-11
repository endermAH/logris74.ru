<?php
/**
 * Created by PhpStorm.
 * User: kuratovevgenij
 * Date: 07/02/2019
 * Time: 17:35
 */

$name = htmlspecialchars($_POST['name']);
$number = htmlspecialchars($_POST['number']);

$subject = "Новое обращение с сайта lorgis74.ru";

$message =
    "<b>Обращение от:</b> {$name} <br>
     <b>Номер телефона:</b><br> {$number}";

$mailto = "evg.kuryatov@gmail.com";

$mail =
    mail($mailto, $subject, $message,
        "From: webmaster@ example.com \r\n"
        ."X-Mailer: PHP/" . phpversion());

var_dump($mail);