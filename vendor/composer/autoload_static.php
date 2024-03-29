<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc24dc011f25008a5a3be5e9698a2e310
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'muyomu\\punit\\' => 13,
            'muyomu\\log4p\\' => 13,
            'muyomu\\inject\\' => 14,
            'muyomu\\aop\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'muyomu\\punit\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'muyomu\\log4p\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/log4p/src',
        ),
        'muyomu\\inject\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/inject/src',
        ),
        'muyomu\\aop\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/aop/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc24dc011f25008a5a3be5e9698a2e310::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc24dc011f25008a5a3be5e9698a2e310::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc24dc011f25008a5a3be5e9698a2e310::$classMap;

        }, null, ClassLoader::class);
    }
}
