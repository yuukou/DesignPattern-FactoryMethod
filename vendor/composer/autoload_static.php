<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb0c53c77516f540b94cda8cdcfc05f3e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Main\\' => 5,
        ),
        'F' => 
        array (
            'FactoryMethod\\' => 14,
            'FactoryMethodConcrete\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Main\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Main',
        ),
        'FactoryMethod\\' => 
        array (
            0 => __DIR__ . '/../..' . '/FactoryMethod',
        ),
        'FactoryMethodConcrete\\' => 
        array (
            0 => __DIR__ . '/../..' . '/FactoryMethodConcrete',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb0c53c77516f540b94cda8cdcfc05f3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb0c53c77516f540b94cda8cdcfc05f3e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}