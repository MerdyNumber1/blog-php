<?php
class Model_Main extends Model {
    public function get_data($data = null) { 
        $this->result = $this->db_conn->query("SELECT * FROM articles LIMIT 4;"); 
        $this->result = ["articles" => $this->result];  
        return $this->result;
    }
}