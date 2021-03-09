<div style="width:75%;">

<?php 
    if(isset($_SESSION['register']) && $_SESSION['register'] == "complete"): ?>
    <strong>Regsitro completado correctamente </strong>     
    <?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == "failled"): ?>
        <strong>Regsitro Fallido, Introduce bien los datos </strong>
    <?php endif; ?>

    <?php Utils::deleteSession('register'); ?>

    <form class="form_registro" action="<?=base_url?>usuario/save" method="POST">
        <div>
            <div class="d-flex">
                <label class="label" for="nombre">Nombre</label>
            </div>
            <div class="d-flex">
                <input  class="input" type="text" name="nombre" required/>
            </div>  
        </div>

        <div>
            <div class="d-flex">
                <label class="label" for="apellidos">Apellidos</label>
            </div>
            <div class="d-flex">
                <input class="input" type="text" name="apellidos" required/>
            </div>
        </div>
        <div>
            <div class="d-flex">
                <label class="label" for="email">Email</label>
            </div>
            <div class="d-flex">
                <input class="input" type="email" name="email" required/>
            </div>
        </div>
        <div>
            <div class="d-flex">
                <label class="label" for="password">Contraseña</label>
            </div>
            <div class="d-flex">
                <input class="input" type="password" name="password" required/>
            </div>
        </div>
        <div class="d-flex">
            <input class="btn" type="submit" value="registrarse" >
        </div>    
    <form>

</div>