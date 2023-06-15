<?php

class ModeloProducto{
    private $PDO;
    public function __construct()
    {
        require_once("c://xampp/htdocs/prueba_konecta/Config/config.php");
        $conec = new db();
        $this->PDO = $conec->conexion();

    }

    public function insertar($nombre,$referencia,$precio,$peso,$categoria,$stock,$fecha){
        $stament = $this->PDO->prepare("INSERT into productos VALUES(null,:Nombre,:Referencia,:Precio,:Peso,:Categoria,:Stock,:Fecha)");
        $stament->bindParam(":Nombre", $nombre);
        $stament->bindParam(":Referencia", $referencia);
        $stament->bindParam(":Precio", $precio);
        $stament->bindParam(":Peso", $peso);
        $stament->bindParam(":Categoria", $categoria);
        $stament->bindParam(":Stock", $stock);
        $stament->bindParam(":Fecha", $fecha);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;

    }

    public function show($id){
        $stament = $this->PDO->prepare("SELECT * FROM productos WHERE IdProducto = :id");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $stament->fetch() : false;
    }

    public function index(){
        $stament = $this->PDO->prepare("SELECT * FROM productos");
        return ($stament->execute()) ? $stament->fetchAll() : false;

    }

    public function update($id, $nombre, $referencia,$precio,$peso,$categoria,$stock,$fecha){
        $stament = $this->PDO->prepare("UPDATE productos set Nombre = :nombre, Referencia = :referencia, Precio = :precio, Peso = :peso, Categoria = :categoria, Stock = :stock, Fecha = :fecha WHERE IdProducto = :id");
        $stament->bindParam(":id", $id);
        $stament->bindParam(":nombre", $nombre);
        $stament->bindParam(":referencia", $referencia);
        $stament->bindParam(":precio", $precio);
        $stament->bindParam(":peso", $peso);
        $stament->bindParam(":categoria", $categoria);
        $stament->bindParam(":stock", $stock);
        $stament->bindParam(":fecha", $fecha);
        return ($stament->execute()) ? $id: false;
    }

    public function delete($id){
        $stament = $this->PDO->prepare("DELETE FROM productos WHERE IdProducto = :id");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? true: false;
    }


    

    public function stock($id, $cantidad){
        $stament = $this->PDO->prepare("UPDATE productos SET Stock= Stock - :cantidad WHERE IdProducto = :id");
        $stament->bindParam(":id", $id);
        $stament->bindParam(":cantidad", $cantidad);
        return ($stament->execute()) ? true: false;
    }

    public function buscar($id){
        $stament = $this->PDO->prepare("SELECT * FROM productos WHERE IdProducto = :id");
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? $stament->fetch() : false;
    }


    public function insertar_venta($id,$cantidad){
        $stament = $this->PDO->prepare("INSERT into ventas VALUES(null,:id_producto,:Cantidad)");
        $stament->bindParam(":id_producto", $id);
        $stament->bindParam(":Cantidad", $cantidad);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;

    }
}


?>