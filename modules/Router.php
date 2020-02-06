<?php
namespace modules;

use controllers\MainController;

class Router {

    private static $routes = [
        '/' => 'main/index',
        '/signup' => 'main/signup',
        '/contacts' => 'main/contacts',
    ];

    public static function getRoutes() {
        return self::$routes;
    }


    public static function getURI() {
        return $_SERVER['REQUEST_URI'];
    }

    public static function run() {
        require ROOT."/controllers/MainController.php";

        $uri = self::getURI();
        $routes = self::$routes;
        $currentPath = '';

        $controller = new MainController();

        foreach ($routes as $route => $action) {
            $controllerName = ucfirst(explode('/', $action)[0]) .'Controller';
            $action = explode('/', $action)[1];

            if ($uri === $route || $uri === "{$route}/") {
                $currentPath = $route;
                $controller->$action();
            }
        }

        if ($uri !== $currentPath && $uri !== "{$currentPath}/")
            $controller->error();
    }

}