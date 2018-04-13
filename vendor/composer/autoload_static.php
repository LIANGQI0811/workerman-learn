<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e6202733432bf8729c6635ac5a01712
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3e6202733432bf8729c6635ac5a01712::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3e6202733432bf8729c6635ac5a01712::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}