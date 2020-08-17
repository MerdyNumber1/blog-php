<?php
use \Klein\Klein;

class Router { 
    static public function start() { 
        $route = new Klein();

        $route->respond('GET', '/', function () {
            require_once __DIR__."/../controllers/controller_main.php";	
            $controller_main = new Controller_Main;	
            $controller_main->action_index(); 
        }); 
        $route->respond('GET', '/posts', function () {		
            require_once __DIR__."/../controllers/controller_posts.php";	
            $controller_posts = new Controller_Posts;	
            $controller_posts->action_index(); 
        }); 
        $route->respond('GET', '/posts/[:id]', function ($req) {		
            require_once __DIR__."/../controllers/controller_post.php";	
            $controller_post = new Controller_Post;	
            $controller_post->action_index($req->id); 
        }); 
        
        $route->onHttpError(function ($code, $router) {
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
        
        $route->dispatch();
    }
}