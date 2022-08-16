<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26599cf68ef2b7b3815b3fb4c9c434a3
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26599cf68ef2b7b3815b3fb4c9c434a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26599cf68ef2b7b3815b3fb4c9c434a3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit26599cf68ef2b7b3815b3fb4c9c434a3::$classMap;

        }, null, ClassLoader::class);
    }
}
