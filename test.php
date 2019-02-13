<?php
/**
 * Created by PhpStorm.
 * User: kuratovevgenij
 * Date: 13/02/2019
 * Time: 13:01
 */

include '../simple_html_dom.php';

$html = file_get_html("https://1c.ru/news/newslist.jsp");

echo $html->find(".news-list")[0];

