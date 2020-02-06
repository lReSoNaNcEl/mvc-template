<?php
namespace modules;

use controllers\MainController;

class Router {

    private static $routes = [
        '/' => 'main/index',
        '/signup' => 'main/signup'
    ];

    public static function getRoutes() {
        return self::$routes;
    }


    public static function getURI() {
        return $_SERVER['REQUEST_URI'];
    }

    public static function run() {
        $uri = self::getURI();
        $routes = self::$routes;
        $controllerName = 'MainController';
        $action = '';

        require "{$_SERVER['DOCUMENT_ROOT']}/controllers/{$controllerName}.php";

        foreach ($routes as $route => $controller) {
            $controllerName = ucfirst(explode('/', $controller)[0]) .'Controller';
            $action = explode('/', $controller)[1];

            if ($uri === $route || $uri === "{$route}/") {
                $controller = new MainController();
                $controller->$action();
            }
        }
    }

}