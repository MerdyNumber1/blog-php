<?php

use RedBeanPHP\R;
class Model_Articles extends Model { 
    public function get_data_articles($data = null) {  
        $this->data = R::findAll('articles');
        $articles_data = [];
        foreach($this->data as $row) { 
            array_push($articles_data, [
                "article_title" => $row['title'],
                "article_date" => $row['date'],
                "article_image" => !empty($row['image_name']) ? $row['image_name'] : null,
                "article_id" => $row['id'],
            ]);
        }  
        $this->result = [
            "title" => "Все посты",
            "header_title" => "Все посты",
            "articles" => $articles_data,
            "path_to_articles_images" => "upload/article_images",
        ]; 
        return $this->result; 
    }
    public function get_data_article($data = null) {   
        $this->data = R::load('articles', $data); 
        $this->result = [
            "title" => mb_strimwidth($this->data->title, 0, 22)."...",
            "header_title" => $this->data->title,
            "article" => [
                "article_title" => $this->data['title'],
                "article_date" => $this->data['date'],
                "article_content" => $this->data['content'],
                "article_image" => !empty($this->data['image_name']) ? $this->data['image_name'] : null, 
            ],
            "path_to_articles_images" => "upload/article_images",
        ];  
        return $this->result;
    }
}