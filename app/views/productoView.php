<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class ProductoView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    public function showViewProductos($productos){   
        // asigno variables al tpl smarty
        $this->smarty->assign('titulo', "Productos");
        $this->smarty->assign('productos', $productos);
        // mostrar el tpl
        $this->smarty->display('products.tpl');
    }

    public function ViewProduct($producto){   
        // asigno variables al tpl smarty
        $this->smarty->assign('titulo', "Detalle del producto");
        $this->smarty->assign('producto', $producto);

        // mostrar el tpl
        $this->smarty->display('product.tpl');
    }

    public function showViewProductsBySpecification($especificaciones, $productos){
        $this->smarty->assign('titulo', "Productos por especificación");
        $this->smarty->assign('especificaciones', $especificaciones);
        $this->smarty->assign('productos', $productos);
        // mostrar el tpl
        $this->smarty->display('productsBySpecification.tpl');
    }

    public function FormAddProduct ($especificaciones){
        //asigno variables al tpl smarty
        $this->smarty->assign ('titulo', "Agregue un producto");
        $this->smarty->assign('especificaciones', $especificaciones);
        // mostrar el tpl
        $this->smarty->display('add_product.tpl');
    }

    public function editarProducto($producto, $especificaciones){
        //asigno variables al tpl smarty
        $this->smarty->assign ('titulo', "Edite un producto");
        $this->smarty->assign('producto', $producto);
        $this->smarty->assign('especificaciones', $especificaciones);
        
        // mostrar el tpl
        $this->smarty->display('edit_product.tpl');
    }


}
