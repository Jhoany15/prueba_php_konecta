<?php

class categoriaController{
    private $modelo;

    public function __construct()
    {
        require_once("c://xampp/htdocs/prueba_konecta/Model/ModeloCategoria.php");
        $this->modelo = new ModeloCategoria();
    }


    public function guardar($nombre){
        $existe = $this->modelo->buscar_categoria($nombre);
        if ($existe) {
            echo "<script>alert('Esta categoria ya existe');</script>";
            exit;
        }
        $id = $this->modelo->insertar($nombre);
        return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:CrearCategoria.php");
    }

    public function show($id){
        return ($this->modelo->buscar_categoria($id) != false)  ? $this->modelo->buscar_categoria($id) : header("Location:index.php");

    }

    public function index_categoria(){
        return ($this->modelo->index() != false)  ? $this->modelo->index() : false;
    }

    public function productos($nombre){
        return ($this->modelo->buscar_categoria2($nombre) != false)  ? $this->modelo->buscar_categoria2($nombre) : false;
    }






}

?>