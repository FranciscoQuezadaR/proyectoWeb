<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FraLu Library | Registrar</title>
    <link rel="icon" href="img/energia-nuclear.png">
    <link rel="preload" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/normalize.css"/>

    <!-- FUENTES-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/9de6329270.js" crossorigin="anonymous"></script>

    <link rel="preload" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header class="header-sesion-registro-contacto header__padding__bottom">
        <div class="navegacion">
            <div class="logo logo_"> <!-- CLASE LOGO NO EXISTE EN CSS -->
                <a href="../../../proyectoWeb/index.php"><img src="img/energia-nuclear.png" alt="logo" title="logo"></a>
            </div>
        </div>
    </header>
    <main>
        <main>
            <section>
                <form class="formulario" method="post" action="registroUsuario.php">
                    <fieldset>
                        <div class="contacto">
                            <div class="legend">
                                <legend>Registrarse</legend>
                            </div>
                            <div class="campo">
                                <input class="campo__texto" type="text" name="nombre" id="nombre" placeholder="Nombre (es)">
                            </div>
                            <div class="campo">
                                <input class="campo__texto" type="text" name="pa" id="pa" placeholder="Apellido materno">
                            </div>
                            <div class="campo">
                                <input class="campo__texto" type="text" name="sa" id="sa" placeholder="Apellido paterno">
                            </div>
                            <div class="campo">
                                <input class="campo__texto" type="email" name="email" placeholder="Email">
                            </div>
                            <div class="campo">
                                <input class="campo__texto" type="tel" name="tel" id="tel" placeholder="Telefono">
                            </div>
                            <div class="campo">
                                <input class="campo__texto" type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
                            </div>
                            <!-- Validar las contraseñas -->
                            <div class="campo">
                                <input class="campo__texto" type="password" name="" id="" placeholder="Repite la contraseña">
                            </div>
                            <div class="campo-genero">
                                <label class="genero" for="">Genero</label><br><br>
                                <select name="genero" id="">
                                    <option value="sinEscojer">Prefiero no decirlo</option>
                                    <option value="hombre">Hombre</option>
                                    <option value="mujer">Mujer</option>
                                </select>
                            </div>
                            <input class="boton-reg" type="submit" value="Registrarme">
                        </div>  
                    </fieldset>
                </form>
            </section>
        </main>
        <?php
            include '../proyectoWeb/includes/templates/footer.php';
        ?>
</body>
</html>