<?php
require_once("c:/xampp/htdocs/prueba_konecta/View/head/head.php");
require_once("c:/xampp/htdocs/prueba_konecta/Controller/productoController.php");
$obj = new productoController();
$date=$obj->show($_GET['id']);

?>

<h2>El producto <?= $date[1]?> se ha registrado correctamente</h2>
<div>
    <a href="index.php" class="btn btn-primary">Regresar</a>
</div>

<?php
require_once("c:/xampp/htdocs/prueba_konecta/View/head/footer.php");
?>