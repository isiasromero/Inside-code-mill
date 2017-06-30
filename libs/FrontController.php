<?php

require_once ROOT . 'libs/View.php';

class FrontController
{

   
    public static function main()
    {
       
        if (isset($_SESSION)) {
            $view = new view();
            if ((!empty($_REQUEST['controlador'])) and (!empty($_REQUEST['action']))) {
                $controllerName     = $_REQUEST['controlador'] . 'Controller';
                $actionName         = $_REQUEST['action'];
            } else {
                $controllerName = "IndexController";
                $actionName     = "index";
            }
            $controllerPath = controllersFolder . $controllerName . '.php';
            self::Redireccionar($controllerPath, $controllerName, $actionName, $view);
        } else {

            $controllerName = "IndexController";
            $actionName     = "index";
          Self::Redireccionar($controllerPath, $controllerName, $actionName, $view);
        }
    }

    private static function Redireccionar($controllerPath, $controllerName, $actionName, $view)
    {

        if (is_file($controllerPath)) {

        
            require_once $controllerPath;
            if (is_callable(array($controllerName, $actionName)) == false) {
                http_response_code(404);
    
            } else {
                $controller = new $controllerName();
                $controller->$actionName();
            }
        } else {
            http_response_code(500);

        }
    }

}
