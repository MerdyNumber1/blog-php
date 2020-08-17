<?php

class Post {
    public function __construct() {

    }
    public function get_posts($limit) {
        $data = [];
        for($i = 0; $i < $limit; $i++) {
            array_push($data, "Пост lorem ipsum №$i");
        }
        return $data;
    }
}