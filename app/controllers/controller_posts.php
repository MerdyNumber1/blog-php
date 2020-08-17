<?php

class Controller_Posts extends Controller { 
    public static function action($request = null) { 
        require_once __DIR__.'/../models/model_posts.php'; 
        static::render('posts.html', new Model_Posts, null);
    }
}