<?php
require_once './vendor/autoload.php';
require_once './models/Post.php';

$posts = new Post;

use \Klein\Klein;

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('./views');
$twig = new Twig_Environment($loader, array('charset' => 'utf-8', 'cache' => './views_cache', 'debug' => true));	


$klein = new Klein();
$klein->respond('GET', '/', function () {		

    echo $twig->render('index.html', array('data' => $posts->get_posts(5)));
}); 

$klein->onHttpError(function ($code, $router) {
    switch ($code) {
        case 404:
            $router->response()->body(
                "Не найдено"
            );
            break; 
        default:
            $router->response()->body(
                'Server error'
            );
    }
});

$klein->dispatch();