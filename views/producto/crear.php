<div>
<?php if(isset($editar) && isset($pdto) && is_object($pdto)) :?>
    <h1>Editar producto <?=$pdto->nombre?></h1>
    <?php $url_action = base_url."producto/save&code=".$pdto->id;?>
<?php else :?>
    <h1>Crear Nuevo producto</h1>
    <?php $url_action = base_url."producto/save" ;?>
<?php endif; ?>

    <form class="form_create_product" action="<?=$url_action?>" method="POST" enctype="multipart/form-data">
        <div>
            <div class="d-flex">
                <label class="label" for="nombre">Nombre</label>
            </div>
            <div class="d-flex">
                <input  class="input" type="text" name="nombre" required value="<?=isset($pdto) && is_object($pdto) ? $pdto->nombre : " ";?>"/>
            </div>  
        </div>

        <div>
            <div class="d-flex">
                <label class="label" for="descripcion">Descripción</label>
            </div>
            <div class="d-flex">
                <textarea class="input" name="descripcion" required><?=isset($pdto) && is_object($pdto) ? $pdto->descripcion : " ";?></textarea>
            </div>
        </div>
        <div>
            <div class="d-flex">
                <label class="label" for="precio">Precio</label>
            </div>
            <div class="d-flex">
                <input class="input" min="0" type="number" name="precio" value="<?=isset($pdto) && is_object($pdto) ? $pdto->precio : " ";?>" required/>
            </div>
        </div>
        <div>
            <div class="d-flex">
                <label class="label" for="stock">Stock</label>
            </div>
            <div class="d-flex">
                <input class="input" min="0" type="number" name="stock" value="<?=isset($pdto) && is_object($pdto) ? $pdto->stock : " ";?>" required/>
            </div>
        </div>
        <div>
            <div class="d-flex">
                <label class="label" for="categoria">Categoria</label>
            </div>
            <div class="d-flex">
            <?php $categorias = Utils::showCategorias(); ?>
                <select class="input" name="categoria">
                    <?php while($cat = $categorias->fetch_object() ) : ?>
                        <option value="<?=$cat->id?>" <?=isset($pdto) && is_object($pdto) && $cat->id == $pdto->categoria_id ? "selected" : " " ;?> > 
                            <?=$cat->nombre?>
                        </option>
                    <?php endwhile; ?>  
                </select>
            </div>
            <div class="d-flex">
                <label class="label" for="imagen">Imagen</label>
            </div>
            <div class="d-flex">
            <?php if(isset($pdto) && is_object($pdto) && !empty($pdto->imagen) ) :?>
                <img src="<?=base_url?>uploads/images/<?=$pdto->imagen?>" />
                <br>
            <?php endif; ?>
            
            <input class="input" type="file" name="imagen" />
            </div>
        </div>
        <div class="d-flex">
            <input class="btn" type="submit" value="Guardar" >
        </div>    
    <form>
</div>