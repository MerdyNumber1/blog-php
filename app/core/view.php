<?php

class View {
    public function __construct() {
        Twig_Autoloader::register();
        $loader = new Twig_Loader_Filesystem('./views');
        $twig = new Twig_Environment($loader, array('charset' => 'utf-8', 'cache' => './views_cache', 'debug' => true));
    }
    public function generate($content_file, $data) {
        echo $twig->render($content_file, array('data' => $data));
    }
}