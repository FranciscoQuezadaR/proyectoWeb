<?php
    require '../proyectoWeb/includes/config/database.php';
    $bd = conectarDB();
    $band = false;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];
    
        $query = 'SELECT email, contrasena FROM usuarios';
        $resultado = mysqli_query($bd, $query);
        $rows = mysqli_num_rows($resultado);

        if ($rows > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                if ($fila['email'] === $email && $fila['contrasena'] === $contrasena){
                    $band = true;
                } 
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FraLu Library | Inicia Sesion</title>
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
        <section>
            <form class="formulario" method="post">
                <div class="login__bienvenido">
                </div>
                <fieldset class="fieldset__sesion">
                    <div class="inicio__sesion">
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            if (!$band == true) {
                        ?>
                            <div class="contenedor__estado">
                                <h5>Usuario o contraseña incorrectos.</h5>
                            </div>
                        <?php    
                            } else {
                                session_start();
                                $sesion = date('m-d-Y h:i:s a', time());
                                echo $sesion;
                                session_destroy();
                                
                            }
                        } 
                        ?>
                        <div class="campo">
                            <input class="campo__texto" type="text" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="campo">
                            <input class="campo__texto" type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
                        </div>
                        <div class="campo botones">
                            <input class="boton-in" type="submit" value="Iniciar sesion" name="" id="">
                            <a href="registro.html"><input class="boton-in" type="button" value="Registrarme" name="" id=""></a>
                        </div>
                        <div class="contraseña-olvidada">
                            <a href="#">Olvide mi contraseña!</a>
                        </div>
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