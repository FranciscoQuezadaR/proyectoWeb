<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FraLu Library</title>
    <link rel="icon" href="../../../proyectoWeb/img/energia-nuclear.png">
    <link rel="preload" href="../../../proyectoWeb/css/normalize.css"/>
    <link rel="stylesheet" href="../../../proyectoWeb/css/normalize.css"/>

    <!-- FUENTES-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/9de6329270.js" crossorigin="anonymous"></script>

    <link rel="preload" href="../../../proyectoWeb/css/estilos.css">
    <link rel="stylesheet" href="../../../proyectoWeb/css/estilos.css">
</head>
<body>
    <header class="header__crud">
        <div class="navegacion">
            <div class="logo"> <!-- CLASE LOGO NO EXISTE EN CSS -->
                <a href="../../../proyectoWeb/index.html"><img src="../../../proyectoWeb/img/energia-nuclear.png" alt="logo" title="logo"></a>
            </div>
            <label for="check" class="checkbtn">
                <img class="nav__img" src="../../../proyectoWeb/img/lista.png" alt="">
            </label>
            <input type="nav__input" id="check">
            <nav class="navegacion-principal">
                <ul class="nav">
                    <li><a href="../../../proyectoWeb/index.html" class="nav-item">Inicio</a></li>
                    <li><a href="../../../proyectoWeb/about.html" class="nav-item">Nosotros</a></li>
                    <li><a class="nav-item display__categorias">Categorias</a>
                        <ul class="sublista">
                            <li><a href="">fantasia</a></li>
                            <li><a href="">Romance</a></li>
                            <li><a href="">Literatura</a></li>
                        </ul>
                    </li>
                    <li><a href="../../../proyectoWeb/contacto.html" class="nav-item">Contacto</a></li>
                </ul>
            </nav>
            <div class="cuenta-dv">
                <div class="desplegable">
                    <button class="boton-inicio"><img class="cuenta" src="../../../proyectoWeb/img/cuenta.png" alt=""></button>
                    <div class="links-boton">
                        <a href="../../../proyectoWeb/iniciosesion.html" >Inicia Sesion</a>
                        <a href="../../../proyectoWeb/registro.html" >Registrate</a>
                    </div>    
                </div>
                <div>
                    <a href=""><img class="cuenta" src="../../../proyectoWeb/img/carrito-de-compras.png" alt=""></a>
                </div>
            </div>
            <div class="buscador">
                <label for="buscador">
                    <img class="cuenta buscador__icon" src="../../../proyectoWeb/img/buscar.png" alt="">
                </label>
                <input class="input_buscador_check" type="checkbox" id="buscador">
                <div class="div_buscador">
                    <div class="linea__blanca"></div>
                    <input class="input_buscador" type="text">
                    <div class="icon_buscador_div">
                        <a href="#"><img class="cuenta buscador__icon__input" src="img/buscar1.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="post__header__crud"></div>