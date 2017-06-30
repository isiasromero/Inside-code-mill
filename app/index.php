<?php
DEFINE('SEPARADOR', DIRECTORY_SEPARATOR);
DEFINE('ROOT', dirname(dirname(__FILE__)) . SEPARADOR);
DEFINE('controllersFolder', ROOT . 'controllers' . SEPARADOR);


require_once ROOT . 'libs/FrontController.php';
FrontController::main();
