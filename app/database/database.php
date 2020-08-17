<?php
require_once __DIR__."/../../config/config.php";
 
class Database {
    public $db_host, $db_user, $db_password, $db_name, $db_conn;
    public $action;

    public function __construct($config) {
        $this->db_host = $config["db"]["db_host"];
        $this->db_user = $config["db"]["db_user"];
        $this->db_password = $config["db"]["db_password"];
        $this->db_name = $config["db"]["db_name"];   
        $this->db_conn = new mysqli($this->db_host, $this->db_user, $this->db_password, $this->db_name); 

        $this->action = $_SERVER['argv'][1];
        
        if($this->action == "migration") {
            $this->migration();
        } elseif ($this->action = "seeding") {
            $this->seeding($_SERVER['argv'][2]);
        }
    }

    public function migration() { 
        $commands = file_get_contents(__DIR__."/sql/migrations/0000_blog.sql");
        $this->db_conn->query($commands);
    }

    public function seeding($cycles) {
        $commands = file_get_contents(__DIR__."/sql/seeding.sql");
        for($i = 0; $i < $cycles; $i++) {
            $this->db_conn->query($commands);
        }
    }
}

$main = new Database($config);

