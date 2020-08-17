<?php

class Controller_Post extends Controller { 
    public function action_index($request = null) { 
        require_once __DIR__.'/../models/model_post.php'; 
        $this->render('post.html', new Model_Post, $request);
    }
}