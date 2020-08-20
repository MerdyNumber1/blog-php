<?php

class Controller_Error extends Controller { 
    public function action_error($request = null) { 
        require_once __DIR__.'/../models/model_error.php'; 
        $model = new Model_Error;
        return $data = $model->get_data($request); 
    }
}