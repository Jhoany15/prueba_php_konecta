<?php

require_once("c://xampp/htdocs/prueba_konecta/Controller/categoriaController.php");
$obj = new categoriaController();
$obj->guardar($_POST['nombre']);

?>