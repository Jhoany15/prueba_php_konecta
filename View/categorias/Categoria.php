<?php
require_once("c:/xampp/htdocs/prueba_konecta/View/head/head.php");
require_once("c:/xampp/htdocs/prueba_konecta/Controller/categoriaController.php");
$obj = new categoriaController();
$listaproductos=$obj->productos($_GET['nombre']);
?>

<table class="table">
<thead>
<tr>
    <th scope="col">ID</th>
    <th scope="col">NOMBRE</th>
    <th scope="col">REFERENCIA</th>
    <th scope="col">PRECIO</th>
    <th scope="col">PESO</th>
    <th scope="col">CATEGORIA</th>
    <th scope="col">STOCK</th>
    <th scope="col">FECHA</th>
    <th scope="col">ACCIONES</th>
</tr>
</thead>

    <tbody>
    <?php if($listaproductos) :?>
        <?php foreach($listaproductos as $productos): ?>
        <tr>
            <th><?= $productos[0]?></th>
            <th><?= $productos[1]?></th>
            <th><?= $productos[2]?></th>
            <th><?= $productos[3]?></th>
            <th><?= $productos[4]?></th>
            <th><?= $productos[5]?></th>
            <th><?= $productos[6]?></th>
            <th><?= $productos[7]?></th>
            <th><a href="/prueba_konecta/View/productos/EditarProducto.php?id=<?= $productos[0]?>" class="btn btn-primary">Editar Producto</a>
            <a href="/prueba_konecta/View/productos/EliminarProducto.php?id=<?= $productos[0]?>" class="btn btn-danger">Eliminar Producto</a>
            <a href="/prueba_konecta/View/productos/VenderProducto.php?id=<?= $productos[0]?>" class="btn btn-success">Vender Producto</a>
        </th>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
            <tr>
                <td>No hay registros</td>
            </tr>
        <?php endif; ?>

    </tbody>
</table>

<?php
require_once("c:/xampp/htdocs/prueba_konecta/View/head/footer.php");
?>






