<?php 

class App {
    protected $route = [];

    public function get ($url, $controller) 
    {
        $this->route['GET'][$url] = $controller;
    }

    public function post ($url, $controller)
    {
        $this->route['POST'][$url] = $controller;
    }

    public function callController ($controller)
    {
        list($controller, $method) = explode("@", $controller);
        require_once __DIR__ . "/../app/controller/" . $controller . ".php";
        $controllerInstance = new $controller();
        require_once __DIR__ . "/request.php";
        $request = new Request($_GET, $_POST);
        if (count($request->body) == 0) {
            $controllerInstance->$method($request->param);
        } else if (count($request->param) == 0) {
            $controllerInstance->$method($request->body);
        } else if (count($request->param) != 0 && count($request->body) != 0) {
            $controllerInstance->$method($request->body, $request->param);
        }
    }

    public function run () 
    {
        $method = $_SERVER["REQUEST_METHOD"];
        $url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        $controller = $this->route[$method][$url];
        $this->callController($controller);
    }
}