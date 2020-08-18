<?php

class Controller_Main extends Controller { 
    public function action_main($request = null) { 
        require_once __DIR__.'/../models/model_main.php'; 
        $model = new Model_Main;
        $data = $model->get_data();
        $this->render('index.html', $data);
    }
}