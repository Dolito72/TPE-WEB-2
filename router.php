<?php

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once './app/controllers/productoController.php';
require_once './app/controllers/especificacionController.php';
require_once './app/controllers/authController.php';

$action = 'products'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parseo los parámetros
$params = explode('/', $action);

// instancio los controller 
$productoController = new ProductoController();
$especificacionController = new EspecificacionController();

// tabla de ruteo
switch ($params[0]) {
    case 'login':
        $authController = new AuthController();
        $authController->showFormLogin();
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
    case 'home':
        $productoController->showControllerProducts();
        break;
    case 'products':
        if (isset($params[1])) {
            $id = $params[1];
            $productoController->showControllerProductsbySpecification();
        } else {
            $productoController->showControllerProducts();
        }
        break;
    case 'product':
        $id = $params[1];
        $productoController->viewProduct($id);
        break;
        
    case 'add':
        if (isset($params[1])) {
            switch ($params[1]) {
                case  'product':
                    $productoController->addProducto();
                    break;
                case  'specification':
                    $especificacionController->addSpecification();
                    break;
                default:
                    echo ('404 Page not found');
                    break;
            }
        }
        break;
    case 'edit':
        if (isset($params[1])) {
            switch ($params[1]) {
                case  'product':
                    $id = $params[2];
                    $productoController->editarProducto($id);
                    break;
                case  'specification':
                    $id = $params[2];
                    $especificacionController->editSpecificacion($id);
                    break;
                default:
                    echo ('404 Page not found');
                    break;
            }
        }
        break;
    case 'update':
        if (isset($params[1])) {
            switch ($params[1]){
                case  'product':
                    $productoController->updateProducto();
                    break;
                case  'specification':
                    $especificacionController->updateSpecification();
                    break;
                default:
                    echo ('404 Page not found');
                    break;
            }
        }
    break;
    case 'delete':
        if (isset($params[1])) {
            switch ($params[1]) {
                case  'product':
                    $id = $params[2];
                    $productoController->deleteProduct($id);
                    break;
                case  'specification':
                    $id = $params[2];
                    $especificacionController->deleteSpecification($id);
                    break;
                default:
                    echo ('404 Page not found');
                    break;
            }
        }
        break;
    case 'specifications':
        $especificacionController->showControllerSpecifications();
        break;
    default:
        echo ('404 Page not found');
        break;
}
