<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52a066e5df08c21135f842ae6a192b8f
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit52a066e5df08c21135f842ae6a192b8f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52a066e5df08c21135f842ae6a192b8f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit52a066e5df08c21135f842ae6a192b8f::$classMap;

        }, null, ClassLoader::class);
    }
}