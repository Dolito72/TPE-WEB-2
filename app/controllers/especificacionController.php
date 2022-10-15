<?php
require_once './app/models/especificacionModel.php';
require_once './app/views/especificacionView.php';
require_once './helpers/auth.helper.php';
require_once './app/models/productoModel.php';

class EspecificacionController{
    private $model;
    private $view;
    private $modelProduct;
    private $authHelper;
 
    public function __construct(){
        $this->model = new EspecificacionModel();
        $this->view = new EspecificacionView();
        $this->modelProduct = new ProductoModel();
        $this->authHelper = new AuthHelper();
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public function showControllerSpecifications(){
        $especifications = $this->model->getAllEspecifications();
        $this->view->showEspecifications($especifications);
    }
  
    public function addSpecification(){
        $this->authHelper->checkLoggedIn();
            if (empty($_POST)) {
                $this->view->FormAddSpecification();
            return;
            }
        if(!empty($_POST) && isset($_POST['modelo']) &&  isset($_POST['descripcion']) && isset($_POST['cilindrada'])
            && isset($_POST['potencia'])){
            $especificacion = new stdClass();
            $especificacion->modelo = $_POST['modelo'];
            $especificacion->descripcion = $_POST['descripcion'];
            $especificacion->cilindrada = $_POST['cilindrada'];
            $especificacion->potencia = $_POST['potencia'];
            $id = $this->model->insertSpecification($especificacion);
            header('Location: ' . BASE_URL . 'specifications');
        }
    }

    public function editSpecificacion($id){
        $this->authHelper->checkLoggedIn();
        $especificacion = $this->model->getSpecification($id);
        $this->view->editarProducto($especificacion);
    }

    public function updateSpecification(){
        if (!empty($_POST) && isset($_POST['modelo']) &&  isset($_POST['descripcion']) && isset($_POST['cilindrada'])
            && isset($_POST['potencia']) && isset($_POST['id_especificacion'])){
            $especificacion = new stdClass();
            $especificacion->modelo = $_POST['modelo'];
            $especificacion->descripcion = $_POST['descripcion'];
            $especificacion->cilindrada = $_POST['cilindrada'];
            $especificacion->potencia = $_POST['potencia'];
            $especificacion->id_especificacion = $_POST['id_especificacion'];
            //paso el objeto producto al modelo, para hacer el update en la DB
            $this->model->editSpecification($especificacion);
            header("Location: " . BASE_URL . 'specifications');
        }
    }

    public function deleteSpecification($id){
        $this->authHelper->checkLoggedIn();
        $productos = $this->modelProduct->searchProductsBySpecification($id);
        if(count($productos)>0){
            $this->view->showError();
        }
        else{
            $this->model->deleteSpecificationById($id);
            header("Location: " . BASE_URL . 'specifications');
        }
    }
}
