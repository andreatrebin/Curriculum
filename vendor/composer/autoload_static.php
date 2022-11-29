<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitace2b007fb96afd1115356845ae74b1c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitace2b007fb96afd1115356845ae74b1c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitace2b007fb96afd1115356845ae74b1c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitace2b007fb96afd1115356845ae74b1c::$classMap;

        }, null, ClassLoader::class);
    }
}
