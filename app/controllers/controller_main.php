<?php

class Controller_Main extends Controller { 
    public static function action($request = null) { 
        require_once __DIR__.'/../models/model_main.php'; 
        static::render('index.html', new Model_Main, $request);
    }
}