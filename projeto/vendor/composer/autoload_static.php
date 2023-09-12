<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1403deb4965dd5a9db1b58fe0639481a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MuriloVeetorazo\\Projeto\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MuriloVeetorazo\\Projeto\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1403deb4965dd5a9db1b58fe0639481a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1403deb4965dd5a9db1b58fe0639481a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1403deb4965dd5a9db1b58fe0639481a::$classMap;

        }, null, ClassLoader::class);
    }
}
