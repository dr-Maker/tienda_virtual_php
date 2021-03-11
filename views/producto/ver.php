<?php if(isset($pdto)) : ?>
<div>
    <div>
        <h1><?= $pdto->nombre ?></h1>
    </div>

    <div class="img-producto">
        <img src="<?=base_url?>uploads/images/<?=$pdto->imagen?>" />
    </div>

    <div>
        <p>$ <?=$pdto->precio?></p>
    </div>

    <div>
        <p><?=$pdto->descripcion?></p>
    </div>

    <div class="d-flex">
            <a class="btn_producto" href="<?=base_url?>carrito/add&id=<?=$pdto->id?>"> Comprar</a>
    </div>
</div>



<?php else : ?>
    <h1>El producto no existe</h1>
<?php endif; ?>