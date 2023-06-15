<?php
require_once("c:/xampp/htdocs/prueba_konecta/View/head/head.php");
require_once("c:/xampp/htdocs/prueba_konecta/Controller/categoriaController.php");
$obj = new categoriaController();
$listarCategoria = $obj->index_categoria();
?>

<table class="table">
<thead>
<tr>
    <th scope="col">ID</th>
    <th scope="col">NOMBRE</th>
    <th scope="col">ACCIONES</th>
</tr>
</thead>

    <tbody>
    <?php if($listarCategoria) :?>
        <?php foreach($listarCategoria as $categoria): ?>
        <tr>
            <th><?= $categoria[0]?></th>
            <th><?= $categoria[1]?></th>
            <th>
            <a href="categoria.php?nombre=<?= $categoria[1]?>" class="btn btn-success">Ver</a>
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