<?php
class Model_Articles extends Model {
    public $result;
    public function get_data_articles($data = null) { 
        $this->result = $this->db_conn->query("SELECT * FROM articles"); 
        $this->result = ["articles" => $this->result];  
        return $this->result;
    }
    public function get_data_article($data = null) {   
        $this->result = $this->db_conn->query("SELECT * FROM articles WHERE id = $data");  
        $this->data = $this->result->fetch_array(MYSQLI_ASSOC);  
        $this->result = [
            "title" => mb_strimwidth($this->data['title'], 0, 22)."...",
            "article" => $this->data,
        ];  
        return $this->result;
    }
}