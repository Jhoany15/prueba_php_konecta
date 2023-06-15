<?php
require_once("c:/xampp/htdocs/prueba_konecta/View/head/head.php");
require_once("c:/xampp/htdocs/prueba_konecta/Controller/productoController.php");
$obj = new productoController();
$productos=$obj->show($_GET['id']);
?>

<form action="ActualizarProducto.php" method="post">
<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
    <div class="col-sm-10">
      <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $productos[0]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">NOMBRE</label>
    <div class="col-sm-10">
      <input type="text" name="nombre" value="<?= $productos[1]?>" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">REFERENCIA</label>
    <div class="col-sm-10">
      <input type="text" name="referencia" value="<?= $productos[2]?>" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">PRECIO</label>
    <div class="col-sm-10">
      <input type="int" name="precio" value="<?= $productos[3]?>" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">PESO</label>
    <div class="col-sm-10">
      <input type="int" name="peso" value="<?= $productos[4]?>" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">CATEGORIA</label>
    <div class="col-sm-10">
      <input type="text" name="categoria" value="<?= $productos[5]?>" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">STOCK</label>
    <div class="col-sm-10">
      <input type="int" name="stock" value="<?= $productos[6]?>" class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">FECHA</label>
    <div class="col-sm-10">
      <input type="date" name="fecha" value="<?= $productos[7]?>" class="form-control" id="inputPassword">
    </div>
  </div>
  <div>
    <input type="submit" class="btn btn-primary" value="Actualizar">
  </div>
</form>



<?php
require_once("c:/xampp/htdocs/prueba_konecta/View/head/footer.php");
?>