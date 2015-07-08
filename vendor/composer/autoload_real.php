<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInit78b7fcb493ea9c6a581bb8d3ccf046f6
=======
class ComposerAutoloaderInit031b4f6aef1d329308366e18cac0750b
>>>>>>> e2daa7b143a354d747858dfbc2c58f6849c2f1d0
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInit78b7fcb493ea9c6a581bb8d3ccf046f6', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit78b7fcb493ea9c6a581bb8d3ccf046f6', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInit031b4f6aef1d329308366e18cac0750b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit031b4f6aef1d329308366e18cac0750b', 'loadClassLoader'));
>>>>>>> e2daa7b143a354d747858dfbc2c58f6849c2f1d0

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->set($namespace, $path);
        }

        $map = require __DIR__ . '/autoload_psr4.php';
        foreach ($map as $namespace => $path) {
            $loader->setPsr4($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register(true);

        $includeFiles = require __DIR__ . '/autoload_files.php';
        foreach ($includeFiles as $file) {
<<<<<<< HEAD
            composerRequire78b7fcb493ea9c6a581bb8d3ccf046f6($file);
=======
            composerRequire031b4f6aef1d329308366e18cac0750b($file);
>>>>>>> e2daa7b143a354d747858dfbc2c58f6849c2f1d0
        }

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequire78b7fcb493ea9c6a581bb8d3ccf046f6($file)
=======
function composerRequire031b4f6aef1d329308366e18cac0750b($file)
>>>>>>> e2daa7b143a354d747858dfbc2c58f6849c2f1d0
{
    require $file;
}
