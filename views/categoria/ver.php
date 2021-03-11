<?php if(isset($categoria)) : ?>
<div>
    <h1><?= $category->nombre ?></h1>
    <?php if($productos->num_rows == 0) : ?>
        <p>No hay productos para mostrar</p>

    <?php else :?>    

<?php while($pdto = $productos->fetch_object()) : ?>

<div class="producto">   
    <a href="<?=base_url?>producto/ver&id=<?=$pdto->id?>">
        <div class="img-producto">
            <img src="<?=base_url?>uploads/images/<?=$pdto->imagen?>" />
        </div>
        <h2><?=$pdto->nombre ?></h2>
        <p>$ <?=$pdto->precio?></p>
    </a>     
    <div class="d-flex">
        <a class="btn_producto" href="#"> Comprar</a>
    </div>
      
</div>

<?php endwhile; ?>



    <?php endif; ?>
</div>

<?php else : ?>
    <h1>La categoria no existe</h1>
<?php endif; ?>