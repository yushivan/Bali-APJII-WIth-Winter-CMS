<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit49709a9c95aa90ee1a52e87211064374
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JorgeAndrade\\Subscribe\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JorgeAndrade\\Subscribe\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit49709a9c95aa90ee1a52e87211064374::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit49709a9c95aa90ee1a52e87211064374::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit49709a9c95aa90ee1a52e87211064374::$classMap;

        }, null, ClassLoader::class);
    }
}