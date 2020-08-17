<?php

class Controller_Main extends Controller { 
    public function action_index($request = null) { 
        require_once __DIR__.'/../models/model_main.php'; 
        $this->render('index.html', new Model_Main, $request);
    }
}