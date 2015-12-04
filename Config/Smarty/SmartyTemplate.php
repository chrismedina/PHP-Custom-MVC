<?php
/**
 * Created by PhpStorm.
 * User: Chris Medina
 * Date: 11/29/15
 * Time: 10:34 PM
 */

namespace App\Config\Smarty;

class SmartyTemplate extends \Smarty {

    function __construct() {
        parent::__construct();
        $smarty_path = dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'smarty' . DIRECTORY_SEPARATOR;
        $this->setTemplateDir( $smarty_path . 'templates' );
        $this->setCompileDir( $smarty_path . 'templaces_c' );
        $this->setCacheDir( $smarty_path . 'cache' );
        $this->setConfigDir( $smarty_path . 'config' );
    }

}


