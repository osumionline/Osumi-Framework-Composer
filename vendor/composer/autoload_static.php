<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4141e5aa988fd88dadb2a22e6070e031
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Osumi\\OsumiFramework\\App\\' => 25,
            'Osumi\\OsumiFramework\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Osumi\\OsumiFramework\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Osumi\\OsumiFramework\\' => 
        array (
            0 => __DIR__ . '/..' . '/osumi/osumi-framework/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4141e5aa988fd88dadb2a22e6070e031::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4141e5aa988fd88dadb2a22e6070e031::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4141e5aa988fd88dadb2a22e6070e031::$classMap;

        }, null, ClassLoader::class);
    }
}
