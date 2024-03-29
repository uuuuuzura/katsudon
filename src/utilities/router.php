<?php

class Router
{
    protected $routes = [];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function register(string $uri, string $controllerPath)
    {
        $this->routes[$uri] = $controllerPath;
    }

    public function direct(string $uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }
        ;

        return $this->routes['404'];
    }
}