<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37f83f1ffc61b5e8635ca8136a5543f3
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
            0 => __DIR__ . '/..' . '/osumionline/framework/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit37f83f1ffc61b5e8635ca8136a5543f3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37f83f1ffc61b5e8635ca8136a5543f3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit37f83f1ffc61b5e8635ca8136a5543f3::$classMap;

        }, null, ClassLoader::class);
    }
}
