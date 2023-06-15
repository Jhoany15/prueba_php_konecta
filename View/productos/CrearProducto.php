<?php
require_once("c:/xampp/htdocs/prueba_konecta/View/head/head.php");
require_once("c:/xampp/htdocs/prueba_konecta/Controller/categoriaController.php");
$obj = new categoriaController();
$listaproductos = $obj->index_categoria();
?>

<table>
<form action="store.php" method="post" autocomplete="off">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
    <input type="text" name="nombre" required class="form-control" id="exampleInputEmail1">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Referencia</label>
    <input type="text" name="referencia" required class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Precio</label>
    <input type="int" name="precio" required class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Peso</label>
    <input type="int" name="peso" required class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Categoria</label>
    <select class="form-select" name="categoria" id="categoria">
      <?php foreach ($listaproductos as $categoria): ?>
        <option value="<?php echo $categoria['nombre']; ?>"><?php echo $categoria['nombre']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Stock</label>
    <input type="int" name="stock" required class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Fecha</label>
    <input type="date" name="fecha" required class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</table>

<?php
require_once("c:/xampp/htdocs/prueba_konecta/View/head/footer.php");
?>