<?php
/**
 * Created by PhpStorm.
 * User: kuratovevgenij
 * Date: 07/02/2019
 * Time: 17:35
 */

$name = htmlspecialchars($_POST['name']);
$number = htmlspecialchars($_POST['number']);

$subject = "Новое обращение через lorgis74.ru";

$message =
    "<b>Обращение от:</b> {$name} <br>
     <b>Номер телефона:</b><br> {$number}<br>
     <a href='mailer.php'>Больше не присылать такие сообщения</a>";

$mailto = "evg.kuryatov@gmail.com";

echo $message;