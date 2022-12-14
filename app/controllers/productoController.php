<?php
require_once './app/models/productoModel.php';
require_once './app/models/especificacionModel.php';
require_once './app/views/productoView.php';
require_once './helpers/auth.helper.php';

class ProductoController{
    private $model;
    private $modelEspecificacion;
    private $view;
    private $authHelper;


    public function __construct(){
        $this->model = new ProductoModel();
        $this->modelEspecificacion = new EspecificacionModel();
        $this->view = new ProductoView();
        $this->authHelper = new AuthHelper();
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }
    
    public function showControllerProducts(){
        $productos = $this->model->getAllProducts();
            foreach ($productos as $producto) {
                $producto->modelo = $this->modelEspecificacion->getModeloById($producto->id_especificacion);
            }
        $this->view->showViewProductos($productos);
    }

    public function showControllerProductsbySpecification(){
        $especificaciones = $this->modelEspecificacion->getAllEspecifications(); //arreglo con mis especificaciones
        $productos = []; // creo el arreglo vacío
        //valido que existan los datos que me vienen por Post y q no esten vacíos
        if (!empty($_POST) && isset($_POST['id_especificacion'])) {
            $especificacion = $_POST['id_especificacion'];
            $productos = $this->model->searchProductsBySpecification($especificacion);
            foreach ($productos as $producto) {
                $producto->modelo = $this->modelEspecificacion->getModeloById($producto->id_especificacion);
            }
        }
        $this->view->showViewProductsBySpecification($especificaciones, $productos);
    }

    public function viewProduct($id){
        $producto = $this->model->getProduct($id);
        $this->view->viewProduct($producto);
    }

    public function addProducto(){
        $this->authHelper->checkLoggedIn();
            if (empty($_POST)) {
            // traigo mis especificaciones
                $especificaciones = $this->modelEspecificacion->getAllEspecifications();
                $this->view->FormAddProduct($especificaciones);
                return;
            }
        if (!empty($_POST) && isset($_POST['precio']) &&  isset($_POST['color']) && isset($_POST['stock'])
         && isset($_POST['id_especificacion'])){
        //Creo un objeto donde almacenar la info que viene del formulario para enviar a insertar el registro en la DB
            $producto = new stdClass();
            // En el objeto guardo la info de $_POST 
            $producto->precio = $_POST['precio'];
            $producto->color = $_POST['color'];
            $producto->stock = $_POST['stock'];
            $producto->id_especificacion = $_POST['id_especificacion'];
            // Paso el objeto $product al modelo, para insertar el registro en la DB
            $id = $this->model->insertarProducto($producto);
            header("Location: " . BASE_URL);
        }
    }

    public function editarProducto($id){
        $this->authHelper->checkLoggedIn();
        $especificaciones = $this->modelEspecificacion->getAllEspecifications(); //arreglo con mis especificaciones
        $producto = $this->model->getProduct($id);
        $this->view->editarProducto($producto, $especificaciones);
    }

    public function updateProducto(){
        if (!empty($_POST) && isset($_POST['precio']) &&  isset($_POST['color']) && isset($_POST['stock'])
            && isset($_POST['id_especificacion']) && isset($_POST['id_producto'])){
            $producto = new stdClass();
            $producto->id_producto = $_POST['id_producto'];
            $producto->precio = $_POST['precio'];
            $producto->color = $_POST['color'];
            $producto->stock = $_POST['stock'];
            $producto->id_especificacion = $_POST['id_especificacion'];
            //paso el objeto producto al modelo, para hacer el update en la DB
            $this->model->editarProducto($producto);
            header("Location: " . BASE_URL);
        }
    }
   
    public function deleteProduct($id){
        // barrera de seguridad para el administrador logueado
        $this->authHelper->checkLoggedIn();
        $this->model->deleteProductById($id);
        header("Location: " . BASE_URL);
    }
}
