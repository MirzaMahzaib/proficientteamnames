<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8088f26b36c655e4fa1966970fa5d3bf
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

        spl_autoload_register(array('ComposerAutoloaderInit8088f26b36c655e4fa1966970fa5d3bf', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit8088f26b36c655e4fa1966970fa5d3bf', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit8088f26b36c655e4fa1966970fa5d3bf::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}