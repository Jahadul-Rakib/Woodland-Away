<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit514000b2fafbb2d7ebdab8322582ea75
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit514000b2fafbb2d7ebdab8322582ea75::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit514000b2fafbb2d7ebdab8322582ea75::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
