<?php
/**
 * Created by PhpStorm.
 * User: kuratovevgenij
 * Date: 13/02/2019
 * Time: 12:50
 */
include '../simple_html_dom.php';

$html = file_get_html("https://1c.ru/news/newslist.jsp");

foreach ($html->find(".news-list>li>a") as $a) {
    $a->href = "https://1c.ru/".$a->href;
    $a->target = "_blank";
}

$news = $html->find(".news-list")[0];
//$news_html = file_get_html($news);

$newsLocal = file_get_html("../news_local.html");

?>

<head>
    <title>Новости &sdot; Логрис</title>

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
            background-image: url("src/news.jpeg");
            background-position: center top;
            background-attachment: fixed;
            background-size: auto 140%;
        }

        .news-list{
            padding: 5px;
        }

        .news-list>strong {
            text-align: right;
        }

        .news-list>li{
            background-color: #444444;
            color: white;
            margin-bottom: 5px;
            list-style-type: none;
            border-radius: 5px;
            padding: 5px;
        }

        .news-list>li>a {
            color: rgb(255, 193, 7);
        }

        .news-list>li>a:hover {
            color: rgb(255, 193, 7);
        }

        .news-list>li>a:visited {
            color: rgb(255, 193, 7);
        }

        ul {
            margin: 0;
        }

        .newsmg {
            /*width: 100%;*/
            /*//height: 50vm;*/
            overflow: hidden;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #222222">
    <a class="navbar-brand" href="index.html">
        <img src="src/logo-new.png" height="40px">
        <span style="margin-left: 3px">Логрис</span>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="price.html">Возможности<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
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

    <div class="header-bg">
        <h1 class="display-4 header-main" align="center"><span style="color: white">Новости</span></h1>
    </div>

    <div class="row justify-content-center" style="margin: 1%">
        <div class="col-xl-8">
            <?= $newsLocal ?>
        </div>

        <div class="col-xl-4">
            <div class="card input-card">
                <div class="card-header">
                    Новости 1С
                </div>
                <div class="card-body">
                    <?= $news ?>
                </div>
            </div>
        </div>
    </div>



</body>