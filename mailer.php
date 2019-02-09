<?php
/**
 * Created by PhpStorm.
 * User: kuratovevgenij
 * Date: 07/02/2019
 * Time: 17:35
 */
echo 'hello';
$message = 'Hello^ i am Jonny';
$test =
    mail("evg.kuryatov@gmail.com", "the subject", $message,
        "From: webmaster@ example.com \r\n"
        ."X-Mailer: PHP/" . phpversion());
echo $test;
phpinfo();