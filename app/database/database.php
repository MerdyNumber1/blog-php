<?php
require_once __DIR__."/../../config/config.php";
require_once __DIR__.'/../../vendor/autoload.php';  

use RedBeanPHP\R;
class Database {
    public $action;

    public function __construct() {
        R::setup("mysql:host=".Config::get("db_host").";dbname=".Config::get("db_name"), Config::get("db_user"), Config::get("db_password"));

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

$main = new Database();

