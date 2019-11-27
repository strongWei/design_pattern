<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/27
 * Time: 13:36
 */

if(!function_exists('classAutoLoader')){
    /**
     * @param $class
     */
    function classAutoLoader($class){
        $class = str_replace('\\', '/',$class);
        $classFile = __DIR__ . '/' . $class . '.php';

        if(is_file($classFile) && !class_exists($class)){
           include $classFile;
        }
    }
}

spl_autoload_register('classAutoLoader');