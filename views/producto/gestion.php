<div>
    <h1>Gestión de productos</h1>


<a href="<?=base_url?>producto/crear">crear Producto</a>
<br>
<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == "complete" ) : ?>
    <strong>El producto se ha creado correctamente</strong>

<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] != "complete" ) : ?>
    <strong>El producto no se ha creado correctamente</strong>
<?php endif; ?>

<?php Utils::deleteSession('producto'); ?>


<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == "complete" ) : ?>
    <strong>El producto se ha borrado correctamente</strong>

<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] != "complete" ) : ?>
    <strong>El producto no se ha borrado</strong>
<?php endif; ?>

<?php Utils::deleteSession('delete'); ?>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php while($pdto = $productos->fetch_object()) :?>
        <tr>
            <td><?=$pdto->id ?></td>
            <td><?=$pdto->nombre ?></td>    
            <td><?=$pdto->precio ?></td>  
            <td><?=$pdto->stock ?></td> 
            <td><a href="<?=base_url?>producto/edit&code=<?=$pdto->id?>">Editar</a></td>
            <td><a href="<?=base_url?>producto/delete&code=<?=$pdto->id?>">Eliminar</a></td>     
        </tr>
         <?php endwhile; ?>
    
    </tbody>
</table>



</div>