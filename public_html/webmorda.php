<?php
/**
 * Created by PhpStorm.
 * User: kuratovevgenij
 * Date: 13/02/2019
 * Time: 16:47
 */

$title = $_POST['title'];
$text = $_POST['text'];
$url = $_POST['url'];
$date = $_POST['date'];

$key = $_POST['key'];
if ($key === '+7Logris+7') {
    $last_news = file_get_contents('../news_local.html');
    $new_news =
        "<div class=\"card input-card\">
            <div class=\"card-header\">
                {$title}
            </div>
            <div class=\"card-body\" style=\"padding: 0; background-color: white; color: black;\">
                <div class=\"new-img\">
                    <img src=\"{$url}\" alt=\"Бесполезная картинка в новости\" width='100%'/>
                </div>
                {$text}
                <div class=\"date\">
                    {$date}
                </div>
            </div>
        </div>".$last_news;

    $current = file_put_contents('../news_local.html', $new_news);
    echo
    "
    <div class=\"header-bg\">
        <h1 class=\"display-4 header-main\" align=\"center\">Ваша статья отправлена!</h1>
    </div>
    ";
}

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
                    <form action="webmorda.php" method="post">
                        <p><input type="text" placeholder="Заголовок" class="field" name="title"></p>
                        <p><input type="text" placeholder="URL изображения" class="field" name="url"></p>
                        <p><textarea placeholder="Текст статьи" class="field" name="text"></textarea></p>
                        <p><input type="text" placeholder="Дата" class="field" name="date"></p>
                        <p><input type="text" placeholder="Ключ" class="field" name="key"></p>
                        <p><input type="submit" class="btn btn-center btn-warning"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>