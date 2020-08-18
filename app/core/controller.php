<?php

class Controller {
    public $view; 

    public function __construct() {
        $this->view = new View();
    }
    public function action($request = null) {
        
    }
    public function render($content_file, $data) { 
        $this->view->generate($content_file, $data);
    }
}