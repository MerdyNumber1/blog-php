<?php
use \Klein\Klein;

class Router { 
    static public function start() { 
        $route = new Klein(); 
        
        $route->respond('GET', '/?', function () {
            require_once __DIR__."/../controllers/controller_main.php";	
            $controller = new Controller_Main; 
            $controller->action_main();	 
        }); 
        
        $route->with('/articles', function() use ($route) {
            $route->respond('GET', '/?', function () {		
                require_once __DIR__."/../controllers/controller_articles.php";
                $controller = new Controller_Articles;
                $controller->action_articles();	
            }); 
            $route->respond('GET', '/[i:id]/?', function ($req) {		
                require_once __DIR__."/../controllers/controller_articles.php";
                $controller = new Controller_Articles; 
                $controller->action_article(["id" => $req->id]);	
            }); 
        }); 
        
        $route->onHttpError(function ($code, $router) {
            switch ($code) {
                case 404:
                    $router->response()->body(
                        "Not found"
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