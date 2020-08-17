<?php
use \Klein\Klein;

class Router { 
    static public function start() { 
        $route = new Klein();

        $route->respond('GET', '/', function () {		
            echo "Главная";
        }); 
        $route->respond('GET', '/posts', function () {		
            echo "Все посты:";
        }); 
        $route->respond('GET', '/posts/[:id]', function ($req) {		
            echo "Пост: $req->id";
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