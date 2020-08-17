<?php
use \Klein\Klein;

class Router { 
    static public function start() { 
        $route = new Klein();
        new Controller;
        
        $route->respond('GET', '/', function () {
            require_once __DIR__."/../controllers/controller_main.php";	
            Controller_Main::action();	 
        }); 
        $route->respond('GET', '/posts', function () {		
            require_once __DIR__."/../controllers/controller_posts.php";	
            Controller_Posts::action();	
        }); 
        $route->respond('GET', '/posts/[i:id]', function ($req) {		
            require_once __DIR__."/../controllers/controller_post.php";	
            Controller_Post::action($req->id);	
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