<?php
require_once("c:/xampp/htdocs/prueba_konecta/View/head/head.php");
?>



<form action="store.php" method="post" autocomplete="off">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre de la categoria</label>
    <input type="text" name="nombre" required class="form-control" id="exampleInputEmail1"> 
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

<?php
require_once("c:/xampp/htdocs/prueba_konecta/View/head/footer.php");
?>