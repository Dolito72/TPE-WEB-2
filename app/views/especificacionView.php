<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class EspecificacionView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showEspecifications($especifications) {
        // asigno variables al tpl smarty
        $this->smarty->assign('titulo', "Tabla de especificaciones"); 
        $this->smarty->assign('especificaciones', $especifications);
        // mostrar el tpl
        $this->smarty->display('specifications.tpl');
    }
     function FormAddSpecification (){
        //asigno variables al tpl smarty
        $this->smarty->assign ('titulo', "Agregue una especificación");
        // mostrar el tpl
        $this->smarty->display('add_specification.tpl');
    }

    function editarProducto($especificacion){
        //asigno variables al tpl smarty
        $this->smarty->assign ('titulo', "Edite una especificación");
        $this->smarty->assign('especificacion', $especificacion);
        // mostrar el tpl
        $this->smarty->display('edit_specification.tpl');
    }

    function showError(){
    $this->smarty->display('showError.tpl');
    }
}
