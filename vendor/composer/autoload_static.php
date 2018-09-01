<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit629e87e5801df0d6b780de6d38460b79
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FbV\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FbV\\' => 
        array (
            0 => __DIR__ . '/../..' . '/include/class',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parserus' => 
            array (
                0 => __DIR__ . '/..' . '/miovisman/parserus',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit629e87e5801df0d6b780de6d38460b79::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit629e87e5801df0d6b780de6d38460b79::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit629e87e5801df0d6b780de6d38460b79::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}