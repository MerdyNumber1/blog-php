<?php
require_once __DIR__."/../../config/config.php";
require_once __DIR__.'/../../vendor/autoload.php';  

use RedBeanPHP\R;
class Database {
    public $db_host, $db_user, $db_password, $db_name, $db_conn;
    public $action;

    public function __construct($config) {
        $this->db_host = $config["db"]["db_host"];
        $this->db_user = $config["db"]["db_user"];
        $this->db_password = $config["db"]["db_password"];
        $this->db_name = $config["db"]["db_name"];    
        R::setup("mysql:host=".$this->db_host.";dbname=".$this->db_name, $this->db_user, $this->db_password); 

        $this->action = $_SERVER['argv'][1];
        
        if ($this->action = "seeding") {
            $this->seeding($_SERVER['argv'][2]);
        }
    } 
    public function seeding($cycles) {
        for($i = 0; $i < $cycles; $i++) {
            $article = R::dispense('articles');
            $article->title = 'Не следует, однако забывать.';
            $article->content = 'С другой стороны укрепление и развитие структуры обеспечивает участие в формировании систем массового участия. Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании новых предложений.';
            $article->image_name = "opinion.jpg";
            $article->date = date("Y-m-d");
            R::store($article);
        }
    }
}

$main = new Database($config);

