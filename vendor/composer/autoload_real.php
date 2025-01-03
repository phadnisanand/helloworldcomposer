<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit94f8db6b3c4d3b2d0bf5c93d506e356b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit94f8db6b3c4d3b2d0bf5c93d506e356b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit94f8db6b3c4d3b2d0bf5c93d506e356b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit94f8db6b3c4d3b2d0bf5c93d506e356b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
