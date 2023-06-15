<?php


class productoController{
    private $modelo;

    public function __construct()
    {
        require_once("c://xampp/htdocs/prueba_konecta/Model/ModeloProducto.php");
        $this->modelo = new ModeloProducto();
    }

    public function guardar($nombre,$referencia,$precio,$peso,$categoria,$stock,$fecha){
        $id = $this->modelo->insertar($nombre,$referencia,$precio,$peso,$categoria,$stock,$fecha);
        return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:CrearProducto.php");

    }
    public function show($id){
        return ($this->modelo->show($id) != false)  ? $this->modelo->show($id) : header("Location:index.php");

    }


    public function index(){
        return ($this->modelo->index() != false)  ? $this->modelo->index() : false;
    }

    public function update($id, $nombre,$referencia,$precio,$peso,$categoria,$stock,$fecha){
        return ($this->modelo->update($id, $nombre,$referencia,$precio,$peso,$categoria,$stock,$fecha) != false)  ? header("Location:show.php?id=".$id) : header("Location:index.php");
    }


    public function delete($id){
        return ($this->modelo->delete($id) != false)  ? header("Location:index.php") : header("Location:show.php?id=".$id);
    }

    public function stock($id, $cantidad ){
        return ($this->modelo->stock($id, $cantidad) != false)  ? header("Location:index.php") : header("Location:show.php?id=".$id);
    }

    public function guardar_venta($id,$nombre,$cantidad,$precio){
        $id = $this->modelo->insertar_venta($id,$nombre,$cantidad,$precio);
        return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:CrearProducto.php");
    }


    public function vender($idProducto,$cantidad){
        $producto = $this->modelo->buscar($idProducto);
        if ($producto != false) {
            $cantidadActual = $producto['Stock'];
            if ($cantidad <= $cantidadActual) {
                $this->modelo->stock($idProducto, $cantidad);
                $id = $this->modelo->insertar_venta($idProducto,$cantidad);
                echo "<script>alert('Venta realizada con éxito.');</script>";
                return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:CrearProducto.php");

            } else {
                echo "<script>alert('La cantidad deseada no está disponible en el stock.');</script>";
                
            }
        } else {
            echo "<script>alert('El producto no existe en la base de datos.');</script>";
        }
    }
}

?>