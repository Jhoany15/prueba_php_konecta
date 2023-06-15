<?php

class ModeloCategoria{
    private $PDO;
    public function __construct()
    {
        require_once("c://xampp/htdocs/prueba_konecta/Config/config.php");
        $conec = new db();
        $this->PDO = $conec->conexion();

    }

    public function buscar_categoria($nombre){
        $stament = $this->PDO->prepare("SELECT * FROM categorias WHERE nombre = :nombre");
        $stament->bindParam(":nombre", $nombre);
        return ($stament->execute()) ? $stament->fetch() : false;
    }

    public function insertar($nombre){
        $stament = $this->PDO->prepare("INSERT into categorias VALUES(null,:nombre)");
        $stament->bindParam(":nombre", $nombre);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;

    }

    public function index(){
        $stament = $this->PDO->prepare("SELECT * FROM categorias");
        return ($stament->execute()) ? $stament->fetchAll() : false;

    }

    public function buscar_categoria2($nombre){
        $stament = $this->PDO->prepare("SELECT * FROM productos WHERE Categoria = :nombre");
        $stament->bindParam(":nombre", $nombre);
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }
}

?>