<?php

class Model_Signup extends Model {
    public function get_data($data = null) {  
        $this->result = [
            "title" => "Регистрация",
            "header_title" => "Регистрация",  
        ];  
        return $this->result;
    }
}