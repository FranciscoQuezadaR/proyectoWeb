<?php
    require '../proyectoWeb/includes/config/database.php';
    $db = conectarDB();

    // Ejecuta el codigo despues de que el usuario envia el formulario
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre     = $_POST ['nombre'     ];
        $apellidoP  = $_POST ['pa'         ];
        $apellidoM  = $_POST ['sa'         ];
        $email      = $_POST ['email'      ];
        $telefono   = $_POST ['tel'        ];
        $contasena  = $_POST ['contrasena' ];
        $genero     = $_POST ['genero'     ];

        if ($genero == "hombre") {
            $genero = "H";
        } else if ($genero == "mujer") {
            $genero = "M";
        } else {
            $genero = "N";
        }

        $query = "INSERT INTO usuarios(nombre, apellidoP, apellidoM, email, telefono, contrasena, genero)
                    VALUES ('$nombre', '$apellidoP', '$apellidoM', '$email', '$telefono', '$contasena', '$genero')";

        $resultado = mysqli_query($db, $query);
        
        /*
        if ($resultado) {
            include '../proyectoWeb/iniciosesion.php';
        } else {
            echo "Algo salio mal, intentalo de nuevo en unos minutos o ponte en contacto con nosotros";
        }
        */
    }
?>