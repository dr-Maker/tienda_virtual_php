<div>
<h1>Gestionar Categorias</h1>


<a href="<?=base_url?>categoria/crear">crear categoria</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        <?php while($cat = $categorias->fetch_object()) :?>
        <tr>
            <td><?=$cat->id ?></td>
            <td><?=$cat->nombre ?></td>       
        </tr>
         <?php endwhile; ?>
    
    </tbody>
</table>

</div>