<?php

class Controller {
    static public $view; 

    public function __construct() {
        self::$view = new View();
    }
    public static function action($request = null) {
        
    }
    public static function render($content_file, $Model, $data) {
        $data = $Model->get_data($data);
        self::$view->generate($content_file, $data);
    }
}