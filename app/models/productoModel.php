<?php

class ProductoModel{
    private $db;

    public function __construct(){
        //en el constructor me conecto a la base de datos
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_motos;charset=utf8', 'root', '');
    }

    //Devuelve la lista de productos completa.
    public function getAllProducts(){
        // 1. conexión a la DB, abierta por el constructor de la clase
        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM producto ");
        $query->execute();
        // 3. obtengo los resultados
        $productos = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        return $productos;
    }
    
     //Devuelve un producto.
    public function getProduct($id){
          // 1. conexión a la DB, abierta por el constructor de la clase
        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare(" SELECT a. *, b. * FROM  producto a INNER JOIN especificacion b
        ON a.id_especificacion = b.id_especificacion WHERE a.id_producto  = ? ");
        $query->execute([$id]);
        // 3. obtengo los resultados
        $producto = $query->fetch(PDO::FETCH_OBJ); // devuelve el producto
        return $producto;
    }
    //buscar productos por especificacion
    public function searchProductsBySpecification($especificacion){
        //busco los productos que tienen determinada especificacion
        $query = $this->db->prepare (" SELECT * FROM  producto 
        WHERE id_especificacion = ? ");
        $query->execute(["${especificacion}"]);
        $productos = $query->fetchAll(PDO::FETCH_OBJ); //me devuelve el arreglo con los productos de esa espechificacion
        return $productos;
    }
    
   
    //Inserta un producto en la tabla productos de la base de datos.
     public function insertarProducto($producto){
        $query = $this->db->prepare("INSERT INTO producto (precio, color, stock, id_especificacion) VALUES (?, ?, ?, ?)");
        $query->execute([$producto->precio, $producto->color, $producto->stock, $producto->id_especificacion]);
        return $this->db->lastInsertId();
    }
    /**
     * Edita un producto en la tabla productos de la base de datos.
     */
    public function editarProducto($producto){
        $query = $this->db->prepare("UPDATE producto SET precio = ?, color = ?, stock = ?, id_especificacion = ?
        WHERE id_producto = ?");
        try{
            $query->execute([$producto->precio, $producto->color, $producto->stock, $producto->id_especificacion, $producto->id_producto]);
       }
        catch(PDOException $e){
            var_dump($e);
        }
    }
   
    //Elimina un producto dado su id
    function deleteProductById($id){
        $query = $this->db->prepare('DELETE FROM producto WHERE id_producto = ?');
        try{
        $query->execute([$id]);
        }
        catch(PDOException $e){
            var_dump($e);
        }
    }
}


