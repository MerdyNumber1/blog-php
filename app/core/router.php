<?php
use \Klein\Klein;

class Router { 
    static public function start() { 
        $klein = new Klein();

        $klein->respond('GET', '/', function () {		
            echo "Главная";
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
    }
}