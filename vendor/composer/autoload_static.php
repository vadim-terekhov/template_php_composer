<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0a829585ada0d1f400fb2605b02545a
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInita0a829585ada0d1f400fb2605b02545a::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
