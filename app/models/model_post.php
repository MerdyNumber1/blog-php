<?php
class Model_Post extends Model {
    public function get_data($data = null) {
        $result = [];
        foreach($this->db_conn->query("SELECT * FROM posts WHERE id = $data") as $row) {
            array_push($result, (array) $row);
        } 
        $this->db_conn = null;    
        $result = ["posts" => $result]; 
        return $result;
    }
}