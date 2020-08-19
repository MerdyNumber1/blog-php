<?php
class Model_Main extends Model {
    public function get_data($data = null) { 
        $this->result = $this->db_conn->query("SELECT * FROM articles LIMIT 4;"); 
        $this->data = $this->result->fetch_all(MYSQLI_ASSOC);
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
            "title" => "Главная",
            "header_title" => "Главная страница",
            "articles" => $articles_data,
            "path_to_articles_images" => "upload/article_images",
        ];  
        return $this->result;
    }
}