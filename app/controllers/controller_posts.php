<?php

class Controller_Posts extends Controller { 
    public function action_index($request = null) { 
        require_once __DIR__.'/../models/model_posts.php'; 
        $this->render('posts.html', new Model_Posts, null);
    }
}