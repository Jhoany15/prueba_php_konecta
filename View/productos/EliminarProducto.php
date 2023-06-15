<?php
require_once("c:/xampp/htdocs/prueba_konecta/View/head/head.php");
require_once("c:/xampp/htdocs/prueba_konecta/Controller/productoController.php");
$obj = new productoController();
$date=$obj->delete($_GET['id']);
?>

