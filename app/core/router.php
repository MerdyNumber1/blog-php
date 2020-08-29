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

        $route->with('/admin', function() use ($route) {
            $route->with('/login/?', function ()  use ($route) {
                $route->respond('GET', '', function ($req) {
                    require_once __DIR__ . "/../controllers/controller_login.php";
                    $controller = new Controller_Login;
                    $controller->action_get_login();
                });
                $route->respond('POST', '', function ($req) {
                    require_once __DIR__ . "/../controllers/controller_login.php";
                    $controller = new Controller_Login;
                    $controller->action_post_login();
                });
            });

            $route->with('/signup/?', function ($req)  use ($route) {
                $route->respond('GET', '', function ($req) {
                    require_once __DIR__."/../controllers/controller_signup.php";
                    $controller = new Controller_Signup;
                    $controller->action_get_signup();
                });
                $route->respond('POST', '', function ($req) {
                    require_once __DIR__."/../controllers/controller_signup.php";
                    $controller = new Controller_Signup;
                    $controller->action_post_signup($req->paramsPost());
                });
            }); 
        }); 
        
        $route->onHttpError(function ($code, $router) { 
            require_once __DIR__."/../controllers/controller_error.php";	
            $controller = new Controller_Error; 
            $data = $controller->action_error($code);
            $router->response()->body(	 
                $controller->render('error.php.twig', $data)
            ); 
        });
        
        $route->dispatch();
    }
}