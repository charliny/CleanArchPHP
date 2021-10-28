<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb3d1fe0006065f8015c16b37b2e37763
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb3d1fe0006065f8015c16b37b2e37763::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb3d1fe0006065f8015c16b37b2e37763::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb3d1fe0006065f8015c16b37b2e37763::$classMap;

        }, null, ClassLoader::class);
    }
}
