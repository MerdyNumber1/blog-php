<?php

class Controller_Post extends Controller { 
    public static function action($request = null) { 
        require_once __DIR__.'/../models/model_post.php'; 
        static::render('post.html', new Model_Post, $request);
    }
}