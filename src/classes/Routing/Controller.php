<?php

use Core\Routing\ControllerInterface;
namespace Core\Routing;

class Controller {
    
    private static $instance;
    public function __construct() {
    }
    
    public static function load() {
        if(is_null($instance)) {
            self::$instance = new Controller();
        }
        return self::$instance;
    }
    
    
}