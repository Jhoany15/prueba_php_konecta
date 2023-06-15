<?php
require_once("c:/xampp/htdocs/prueba_konecta/View/head/head.php");
require_once("c:/xampp/htdocs/prueba_konecta/Controller/productoController.php");
$obj = new productoController();
$rows = $obj->index();
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
    <?php if($rows) :?>
        <?php foreach($rows as $row): ?>
        <tr>
            <th><?= $row[0]?></th>
            <th><?= $row[1]?></th>
            <th><?= $row[2]?></th>
            <th><?= $row[3]?></th>
            <th><?= $row[4]?></th>
            <th><?= $row[5]?></th>
            <th><?= $row[6]?></th>
            <th><?= $row[7]?></th>
            <th><a href="EditarProducto.php?id=<?= $row[0]?>" class="btn btn-primary">Editar Producto</a>
            <a href="EliminarProducto.php?id=<?= $row[0]?>" class="btn btn-danger">Eliminar Producto</a>
            <a href="VenderProducto.php?id=<?= $row[0]?>" class="btn btn-success">Vender Producto</a>
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