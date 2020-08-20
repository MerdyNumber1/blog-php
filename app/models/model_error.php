<?php
class Model_Error extends Model {
    public function get_data($data = null) {  
        $this->result = [
            "title" => "Ошибка $data",
            "header_title" => "Ошибка: $data",  
        ];  
        return $this->result;
    }
}