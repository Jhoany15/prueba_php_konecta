<?php
 require_once("c://xampp/htdocs/prueba_konecta/Controller/productoController.php");
 $obj = new productoController();
 $obj->vender($_POST['id'], $_POST['cantidad']);
?>