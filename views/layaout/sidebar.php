<div class="container_main">
    <aside id="lateral">       
        <div id="login">

                   
                    <div class="log_web_title">
                    <?php if(!isset($_SESSION['identity'])) : ?>
                        <h3>Entrar a la web</h3>
                    </div>   

                    <form action="<?=base_url?>usuario/login" method="post" class="form_log">
                        <div>
                            <div class="d-flex">
                                <label class="label" for="email">Usuario:</label>
                            </div>    
                            <div class="d-flex">
                                <input class="input" type="email" name="email" placeholder="ingrese su correo" />
                            </div>    
                        </div>
                        <div>
                            <div class="d-flex">
                                <label class="label" for="pass">Contraseña</label>
                            </div>    
                            <div class="d-flex">   
                                <input class="input" type="password" name="pass" placeholder="ingrese su contraseña" />
                            </div>
                        </div>
                        <div class="d-flex">
                            <input class="btn" type="submit" value="Entrar">
                        </div>
                    </form>

                  

                    <?php else: ?>
                        <h3><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?></h3>
                        </div>   
                    <?php endif; ?>

                    <div class="options">
                        <ul>
                              
                        <?php if(isset($_SESSION['admin'])) : ?>
                                <li><a href="<?=base_url?>categoria/index"> Gestionar Categorias</a></li>
                                <li><a href="<?=base_url?>producto/gestion"> Gestionar Productos</a></li>
                                <li><a href="#"> Gestionar Pedidos</a></li>
                        <?php endif; ?>

                        <?php if(isset($_SESSION['identity'])) : ?>
                            <li><a href="#"> Mis pedidos</a></li>
                            <li><a href="<?=base_url?>usuario/logout"> Cerrar Sesión</a></li>
                        <?php else: ?>  
                            <li><a href="<?=base_url?>usuario/registro">Regístrese aquí</a></li>
                        <?php endif; ?>
                        </ul>
                    </div>

        </div>
    </aside>

<main>
                