<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit680d17776f4210a3e74c38ad8113bd6f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit680d17776f4210a3e74c38ad8113bd6f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit680d17776f4210a3e74c38ad8113bd6f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit680d17776f4210a3e74c38ad8113bd6f::$classMap;

        }, null, ClassLoader::class);
    }
}
