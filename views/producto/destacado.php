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


