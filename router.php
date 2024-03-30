<?php

class Router {
    protected $routes = [];

    public function addRoute($method, $pattern, $callback) {
        $this->routes[$method][$pattern] = $callback;
    }

    public function dispatch($method, $uri) {
        $uri = rtrim($uri, '/');
        $uri = ($uri === '') ? '/' : $uri;
    
        foreach ($this->routes[$method] as $pattern => $callback) {
            $pattern = '#^' . str_replace('/', '\/', $pattern) . '$#';
            
            if (preg_match($pattern, $uri, $matches)) {
                array_shift($matches); // Remove the full match
                return call_user_func_array($callback, $matches);
            }
        }
        echo "404 Not Found";
    }
    
}
