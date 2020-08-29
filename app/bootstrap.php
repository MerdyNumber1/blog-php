<?php
require_once __DIR__.'/core/model.php';
require_once __DIR__.'/core/view.php';
require_once __DIR__.'/core/controller.php';
require_once __DIR__.'/core/router.php';

use RedBeanPHP\R;

R::setup("mysql:host=".Config::get("db_host").";dbname=".Config::get("db_name"), Config::get("db_user"), Config::get("db_password"));
Router::start();