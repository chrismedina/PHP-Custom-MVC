<?php
/**
 * Created by PhpStorm.
 * User: Chris Medina
 * Date: 12/2/15
 * Time: 4:34 PM
 */

namespace App\Models;

use App\Classes\Database;

abstract class BaseModel {

    protected $db;

    function __construct(){
        $this->db = Database::connect()->database;
    }
}