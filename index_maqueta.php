<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
    <script type="text/javascript" src="./assets/js/icons.js"></script>
    <title>Tienda Virtual</title>
</head>
<body>
    <div class="container"> 
        <header id="header">
            <div id="logo">
                <h1>DM  </h1>
            </div>

            <div id="title">
                <h1>Tienda virtual</h1>
            </div>
        </header>

        <nav id="menu">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Categoria 1</a></li>
                <li><a href="#">Categoria 2</a></li>
                <li><a href="#">Categoria 3</a></li>
            </ul>    
        </nav>    



        <div class="container_main">
            <aside id="lateral">       
                <div id="login">
                    <div class="log_web_title">
                        <h3>Entrar a la web</h3>
                    </div>   

                    <form action="#" method="post" class="form_log">
                        <div>
                            <div class="d-flex">
                                <label class="label" for="email">Usuario:</label>
                            </div>    
                            <div class="d-flex">
                                <input class="input" type="email" name="name" placeholder="ingrese su correo" />
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
                    </from>

                    <div class="options">
                        <a href="#"><i class="fas fa-user"></i> Mis pedidos</a>
                        <a href="#"><i class="fas fa-key"></i>  Gestionar Pedidos</a>
                        <a href="#"><i class="fas fa-lock"></i> Gestionar Categoria</a>
                    </div>

                </div>
            </aside>

            <main>            
                <div class="producto">
                    <div class="img-producto">
                        <img src="./assets/img/polera.jpg" />
                    </div>
                    <h2>nombre producto </h2>
                    <p>$ 10.000</p>
                    <div class="d-flex">
                        <a class="btn_producto" href="#"> Comprar</a>
                    </div>
                </div>

                <div class="producto">
                    <div class="img-producto">
                        <img src="./assets/img/polera.jpg" />
                    </div>
                    <h2>nombre producto </h2>
                    <p>$ 10.000</p>
                    <div class="d-flex">
                        <a class="btn_producto" href="#"> Comprar</a>
                    </div>
                </div>
                <div class="producto">
                    <div class="img-producto">
                        <img src="./assets/img/polera.jpg" />
                    </div>
                    <h2>nombre producto </h2>
                    <p>$ 10.000</p>
                    <div class="d-flex">
                        <a class="btn_producto" href="#"> Comprar</a>
                    </div>
                </div>
                <div class="producto">
                    <div class="img-producto">
                        <img src="./assets/img/polera.jpg" />
                    </div>
                    <h2>nombre producto </h2>
                    <p>$ 10.000</p>
                    <div class="d-flex">
                        <a class="btn_producto" href="#"> Comprar</a>
                    </div>
                </div>

                <div class="producto">
                    <div class="img-producto">
                        <img src="./assets/img/polera.jpg" />
                    </div>
                    <h2>nombre producto </h2>
                    <p>$ 10.000</p>
                    <div class="d-flex">
                        <a class="btn_producto" href="#"> Comprar</a>
                    </div>
                </div>

                <div class="producto">
                    <div class="img-producto">
                        <img src="./assets/img/polera.jpg" />
                    </div>
                    <h2>nombre producto </h2>
                    <p>$ 10.000</p>
                    <div class="d-flex">
                        <a class="btn_producto" href="#"> Comprar</a>
                    </div>
                </div>
            </main>   

        </div>
        <footer>
            <p>Desarrollado por Jonathan Venegas &copy; <?php echo date('Y') ?></p>
        </footer> 
    </div>    
</body>
</html>