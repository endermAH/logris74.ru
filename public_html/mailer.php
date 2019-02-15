<?php

require_once "../vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;

header('Refresh: 5; url=contacts.html');

$name = htmlspecialchars($_POST['name']);
$number = htmlspecialchars($_POST['number']);
$problem = htmlspecialchars($_POST['problem']);

$subject = "Новое обращение с сайта lorgis74.ru";

$message =
    "<b>Обращение от:</b> {$name} <br>
     <b>Номер телефона:</b> {$number} <br>
     <b>Текст обращения:</b>{$problem}";

//echo $message;

$mailto = "info@logris74.ru";

$mail = new PHPMailer;

//Подключение отладки SMTP.

//$mail->SMTPDebug = 3;

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


?>

<head>
    <title>Логрис</title>

    <meta name="description" content="Необходима помощь с настройкой и сопровождением программ 1С? Команда опытных 1С-программистов готова оказать вам любую помощь - от настройки ПО до обучения персонала!">
    <meta name="Keywords" content="1С, 1с программист, настройка 1с, 1с помощь, сопровождение 1с">

    <meta charset="UTF-8">
    <meta name="google-site-verification" content="mYfexeLzt4przDtz-7sf5mI4YGGRGu2b1YsJAeFU9TA" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Темная тема сайта -->
    <meta name="theme-color" content="#505050">
    <!-- Apple -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#33BEE5">

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="icon" href="src/logo-small.png" type="image/x-icon">

    <!-- Шрифт -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">

    <!-- Локальные стили -->
    <link href="main_style.css" rel="stylesheet">

    <style>
        body {
            background: transparent;
        }
        html {
            background-image: url("src/news.jpeg");
            background-position: center 10%;
            background-attachment: fixed;
            background-size: auto 1200px;
            -webkit-background-image: url("src/worker.png");
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #222222">
    <a class="navbar-brand" href="index.html">
        <img src="src/logo-new.png" height="40px">
        <span style="margin-left: 3px">Логрис</span>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="price.html">Возможности<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="news.php">Новости</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contacts.html">Связаться</a>
            </li>
        </ul>
        <a class="link" href="https://vk.com/club147119321">
            <img src="src/vk.png" class="vk-link"/>
        </a>
        <a class="link" href="https://www.instagram.com/1c_logris">
            <img src="src/inst.png" class="vk-link"/>
        </a>
    </div>

</nav>
<div class="row justify-content-center" style="margin: 1%">
    <div class="col-xl-8">
        <div class="card input-card">
            <div class="card-header">
                Добавить статью
            </div>
            <div class="card-body">
                <p class="">
                    <?if (!$mail->send()): ?>
                        Ошибка! Ваше письмо не было доставлено. Попрообуйте связаться снами другим способом - через пять секунд вы будете перенаправлены обратно.
                    <?else: ?>
                        Ваше обращение доставлено! Ждите звонка :)
                    <?endif; ?>
                </p>
            </div>
        </div>
    </div>
</div>

</body>