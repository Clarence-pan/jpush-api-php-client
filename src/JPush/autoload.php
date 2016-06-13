<?php

/**
 * 有些人不用composer来加载，则请include/require此文件来加载.
 */
spl_autoload_register(function ($class) {
    $namespace = 'JPush';
    $class = ltrim($class, '\\');
    if (strncmp($class, $namespace, strlen($namespace)) === 0) {
        $file = __DIR__.DIRECTORY_SEPARATOR.$class.'.php';
        if (file_exists($file)) {
            include_once $file;
        }
    }
});
