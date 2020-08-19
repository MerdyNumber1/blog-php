<?php

class View {
    public $twig = null;
    public function __construct() {
        Twig_Autoloader::register();
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../views');
        $this->twig = new Twig_Environment($loader, array('charset' => 'utf-8', 'cache' => __DIR__.'/../views_cache', 'debug' => true));
        $this->twig->addExtension(new \Twig\Extension\DebugExtension());
    }   
    public function generate($content_file, $data = null) {
        echo $this->twig->render($content_file, $data);
    }
}