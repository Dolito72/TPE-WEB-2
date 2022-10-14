<?php

class EspecificacionModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_motos;charset=utf8', 'root', '');
    }

    /**
     * Devuelve la lista de especificaciones completa.
     */
    public function getAllEspecifications()
    {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM especificacion");
        $query->execute();

        // 3. obtengo los resultados
        $especifications = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos

        return $especifications;
    }

    public function getSpecification($id)
    {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM especificacion WHERE id_especificacion = ?");
        $query->execute([$id]);

        // 3. obtengo los resultados
        $especificacion = $query->fetch(PDO::FETCH_OBJ);

        return $especificacion;
    }


    // me traigo el modelo de mi tabla especificacion
    public function getModeloById($id)
    {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT modelo FROM especificacion WHERE id_especificacion = ?");
        $query->execute([$id]);

        // 3. obtengo los resultados
        $respuesta = $query->fetch(PDO::FETCH_OBJ);

        return $respuesta->modelo;
    }

    //Inserta una especificacion en la base de datos.
    public function insertSpecification($especificacion)
    {
        $query = $this->db->prepare("INSERT INTO especificacion (id_especificacion,modelo, descripcion, cilindrada, potencia) VALUES (?, ?, ?, ?,?)");
        $query->execute([
            $especificacion->id_especificacion, $especificacion->modelo, $especificacion->descripcion, $especificacion->cilindrada,
            $especificacion->potencia
        ]);

        return $this->db->lastInsertId();
    }
   
    // edita una especificacion en la base de datos
    public function editSpecification($especificacion){
        $query = $this->db->prepare("UPDATE especificacion SET modelo = ?, descripcion = ?, cilindrada= ?, 
        potencia = ?
        WHERE id_especificacion = ?");
        try {
            $query->execute([$especificacion->modelo, $especificacion->descripcion, $especificacion->cilindrada,
                $especificacion->potencia, $especificacion->id_especificacion ]);
        
        } 
        catch(PDOException $e) {
            var_dump($e);
        }
    }

//    Elimina una especificación dado su id.
     
    public function deleteSpecificationById($id){
        $query = $this->db->prepare('DELETE FROM especificacion WHERE id_especificacion = ?');
        try{
            $query->execute([$id]);
        }
        catch (PDOException $e){
            ($e);
        }
    }
}
