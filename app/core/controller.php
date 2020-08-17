<?php

class Controller {
    public $view;
    public $model;

    public function __construct() {
        $this->view = new View();
    }
    public function action_index($request = null) {
        
    }
    public function render($content_file, $Model, $data) {
        $data = $Model->get_data($data);
        $this->view->generate($content_file, $data);
    }
}