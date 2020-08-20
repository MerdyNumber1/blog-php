<?php
require_once __DIR__.'/core/model.php';
require_once __DIR__.'/core/view.php';
require_once __DIR__.'/core/controller.php';
require_once __DIR__.'/core/router.php';

use RedBeanPHP\R;
R::setup("mysql:host=".$config["db"]["db_host"].";dbname=".$config["db"]["db_name"], $config["db"]["db_user"], $config["db"]["db_password"]);  
Router::start();