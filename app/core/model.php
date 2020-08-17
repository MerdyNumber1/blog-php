<?php

require_once __DIR__."/../../config/config.php";

class Model {
    public $db_host, $db_user, $db_password, $db_name, $db_conn;

    public function __construct() {
        global $config;
        $this->db_host = $config["db"]["db_host"];
        $this->db_user = $config["db"]["db_user"];
        $this->db_password = $config["db"]["db_password"];
        $this->db_name = $config["db"]["db_name"];   
        $this->db_conn = new PDO("mysql:host=".$this->db_host.";dbname=".$this->db_name, $this->db_user, $this->db_password);
        $this->db_conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 
    }

    public function get_data($data = null) {
        
    }
}