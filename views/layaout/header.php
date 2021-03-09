<!DOCTYPE HTML>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url?>assets/css/style.css" />
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

        <?php $categorias = Utils::showCategorias(); ?>
        <nav id="menu">
            <ul>
                <li><a href="#">Inicio</a></li>
                <?php while($cat = $categorias->fetch_object() ) : ?>
                    <li>
                        <a> <?=$cat->nombre?> </a>
                    </li>
                <?php endwhile; ?>
            </ul>    
        </nav>  