<?php

class Controller {
    public $view, $model;

    public function __construct() {
        $this->$view = new View();
    }
    public function action_index() {
        
    }
}