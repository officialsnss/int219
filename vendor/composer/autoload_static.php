<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1f9975c26a46b5cbc3e5b6a5d94c9a6e
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'paytm\\paytmchecksum\\' => 20,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'paytm\\paytmchecksum\\' => 
        array (
            0 => __DIR__ . '/..' . '/paytm/paytmchecksum/paytmchecksum',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JsonMapper' => 
            array (
                0 => __DIR__ . '/..' . '/netresearch/jsonmapper/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1f9975c26a46b5cbc3e5b6a5d94c9a6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1f9975c26a46b5cbc3e5b6a5d94c9a6e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1f9975c26a46b5cbc3e5b6a5d94c9a6e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}