<?php
/**
 * Created by PhpStorm.
 * User: Chris Medina
 * Date: 11/25/15
 * Time: 8:56 AM
 */

function loader($class) {
    $class_file = DIR . DS . $class . '.php';
    if(file_exists($class_file)){
        require_once($class_file);
    } else {
        foreach( unserialize(AUTOLOAD_CLASSES) as $path){
            $class_file = $path . DS . $class . '.php';
            if(file_exists($class_file)) require_once($class_file);
        }
    }

}

spl_autoload_register('loader');