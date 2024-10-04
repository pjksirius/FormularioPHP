<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit215417c1c93aee15534e6f7f3d29d565
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

        spl_autoload_register(array('ComposerAutoloaderInit215417c1c93aee15534e6f7f3d29d565', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit215417c1c93aee15534e6f7f3d29d565', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit215417c1c93aee15534e6f7f3d29d565::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
