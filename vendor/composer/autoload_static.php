<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc1ac32ed9aa6804cb6ec99bf18234de
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'orm\\' => 4,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'K' => 
        array (
            'Katzgrau\\KLogger\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'orm\\' => 
        array (
            0 => __DIR__ . '/..' . '/sagrishin/lightweight-php-orm/lib/orm',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Katzgrau\\KLogger\\' => 
        array (
            0 => __DIR__ . '/..' . '/katzgrau/klogger/src',
        ),
    );

    public static $classMap = array (
        'Katzgrau\\KLogger\\Logger' => __DIR__ . '/..' . '/katzgrau/klogger/src/Logger.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc1ac32ed9aa6804cb6ec99bf18234de::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc1ac32ed9aa6804cb6ec99bf18234de::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdc1ac32ed9aa6804cb6ec99bf18234de::$classMap;

        }, null, ClassLoader::class);
    }
}
