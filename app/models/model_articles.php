<?php
class Model_Articles extends Model {
    public function get_data_articles($data = null) { 
        $result = $this->db_conn->query("SELECT * FROM articles");
        $this->db_conn = null;    
        $result = ["articles" => $result];  
        return $result;
    }
    public function get_data_article($data = null) {   
        $result = $this->db_conn->query("SELECT * FROM articles WHERE id = $data");
        $this->db_conn = null;    
        $result = ["articles" => $result];    
        return $result;
    }
}