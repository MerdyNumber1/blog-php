<?php
$config = Array(
    "title" => "Блог Алексея Засульского",
    "db_host" => "localhost",
    "db_user" => "root",
    "db_password" => "",
    "db_name" => "blog",
    "article_images" => "upload/article_images",
);

Config::init_config($config);

class Config {
    public static $config = [];

    public static function init_config($array) {
        self::$config = $array;
    }
    public static function get($key) {
        return self::$config[$key];
    }
    public static function set($value) {
        array_push(self::$config, $value);
    }
}

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);