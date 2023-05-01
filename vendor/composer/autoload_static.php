<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a3534b8cefb288cfeb5224876a8e57b
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a3534b8cefb288cfeb5224876a8e57b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a3534b8cefb288cfeb5224876a8e57b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9a3534b8cefb288cfeb5224876a8e57b::$classMap;

        }, null, ClassLoader::class);
    }
}
