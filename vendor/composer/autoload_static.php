<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b828b2501481957a4d6715537de631a
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'luxury\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'luxury\\' => 
        array (
            0 => __DIR__ . '/../..' . '/luxury/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b828b2501481957a4d6715537de631a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b828b2501481957a4d6715537de631a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
