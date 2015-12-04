<?php
/**
 * Created by PhpStorm.
 * User: Chris Medina
 * Date: 11/25/15
 * Time: 1:51 PM
 */

namespace App\Controllers;

use App\Config\Smarty\SmartyTemplate;

abstract class BaseController {

    protected $url;
    protected $action;

    function __construct($url, $action){
        $this->url = $url;
        $this->action = $action;
        $this->tpl = new SmartyTemplate;
    }

    function executeAction(){
        if(!empty($this->action)) return $this->{$this->action}();
    }

    function execView( $viewName ) {

        if( !$viewName ) {
            $class = explode( '\\', get_class( $this ));
            $class = end($class);
        } else {
            $class = $viewName;
        }
        $file = dirname( __DIR__ ) . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . $class . '.tpl.php';

        if( file_exists( $file )) {
            require_once( $file );
        }
        return false;
    }

}