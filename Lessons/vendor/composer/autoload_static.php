<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb179fd33fa9a0f0c2e4a83554e55e856
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
            'Components\\' => 11,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Components\\' => 
        array (
            0 => __DIR__ . '/../..' . '/components',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb179fd33fa9a0f0c2e4a83554e55e856::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb179fd33fa9a0f0c2e4a83554e55e856::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb179fd33fa9a0f0c2e4a83554e55e856::$classMap;

        }, null, ClassLoader::class);
    }
}