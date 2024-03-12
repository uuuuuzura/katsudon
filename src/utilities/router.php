<?php

class Router {
    protected $routes = [];

    public function register(string $uri, string $controllerPath) {
        $this->routes[$uri] = $controllerPath;
    }

    public function direct(string $uri) {
        if(array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        };

        throw new Exception('Page not found.');
    }
}