<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0bd61fd0f1e1baea3af5c50a5584917
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mahathir\\RailMvc\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mahathir\\RailMvc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita0bd61fd0f1e1baea3af5c50a5584917::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0bd61fd0f1e1baea3af5c50a5584917::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita0bd61fd0f1e1baea3af5c50a5584917::$classMap;

        }, null, ClassLoader::class);
    }
}
