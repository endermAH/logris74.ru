<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit32f76f638f794e0b46cc0408ee4e442a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit32f76f638f794e0b46cc0408ee4e442a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit32f76f638f794e0b46cc0408ee4e442a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
