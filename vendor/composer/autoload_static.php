<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit81e15cf73806d65c82fbf0e2e6b8d6ca
{
    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Tarosky\\RichTaxonomy' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit81e15cf73806d65c82fbf0e2e6b8d6ca::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit81e15cf73806d65c82fbf0e2e6b8d6ca::$classMap;

        }, null, ClassLoader::class);
    }
}
