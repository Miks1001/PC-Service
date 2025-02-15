<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit362d70e51586ebf03af4d281af6f5331
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit362d70e51586ebf03af4d281af6f5331::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit362d70e51586ebf03af4d281af6f5331::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit362d70e51586ebf03af4d281af6f5331::$classMap;

        }, null, ClassLoader::class);
    }
}
