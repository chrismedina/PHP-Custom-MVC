<?php
/**
 * Created by PhpStorm.
 * User: Chris Medina
* Date: 11/25/15
* Time: 7:25 AM
*/

ini_set('display_errors',1);

$GLOBALS['config'] = array (
    'mysql' => array (
        'username' => 'youtube',
        'password' => 'youtube',
        'database' => 'youtube',
        'host' => 'localhost'
    )
);


// Autoloading with Composer

require_once('../vendor/autoload.php');
require_once('./Loader.php');

//Load Smarty
require_once('./smarty/Smarty.class.php');

$expected_controllers = array ( 'index', 'home' );
$_GET['controller'] = 'home';
if(!empty($_GET)) {
   if(in_array($_GET['controller'], $expected_controllers )) {
       $controller = new Loader($_GET);
       $controller = $controller->createController();
       $controller->executeAction();
   }
}