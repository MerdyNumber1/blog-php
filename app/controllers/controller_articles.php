<?php

class Controller_Articles extends Controller { 
    public function action_articles($request = null) { 
        require_once __DIR__.'/../models/model_articles.php'; 
        $model = new Model_Articles;
        $data = $model->get_data_articles();
        $this->render('articles.php.twig', $data);
    }
    public function action_article($request) {
        require_once __DIR__.'/../models/model_articles.php';
        $model = new Model_Articles;
        $data = $model->get_data_article($request['id']);
        $this->render('article.php.twig', $data);
    }
}