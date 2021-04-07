<?php


class Router {
    private static ?Router $instance = null;

    private array $routes = [];

    private function __constructor(){}
    private function __clone(){}

    public static function getInstance(): Router
    {
        return self::$instance === null ? self::$instance = new self() : self::$instance;
    }

    public function handleGet($uri, $handler) {
        $this->routes[$uri] = $handler;
    }

    public function __get($uri) {

        $pos = strrpos( $uri,  "?");
        if($pos){
            $uri = substr($uri, 0, $pos);
        }
        if (!isset($this->routes[$uri])) {
            return;
        }
        $handler = $this->routes[$uri];

        $handler();
    }
}