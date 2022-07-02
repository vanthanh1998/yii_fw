<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit564f0a0d8962010c09b2076bd949e2cc
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Yii' => __DIR__ . '/..' . '/yiisoft/yii/framework/yii.php',
        'YiiBase' => __DIR__ . '/..' . '/yiisoft/yii/framework/YiiBase.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit564f0a0d8962010c09b2076bd949e2cc::$classMap;

        }, null, ClassLoader::class);
    }
}