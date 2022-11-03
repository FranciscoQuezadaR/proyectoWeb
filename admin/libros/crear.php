<?php
    // Base de datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    // Arreglo con mensaje de errores
    $errores = [];

    // Ejecuta el codigo despues de que el usuario envia el formulario
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $titulo         = $_POST [ 'titulo'       ];
        $existencias    = $_POST [ 'existencias'  ];
        $precioCompra   = $_POST [ 'precioCompra' ];
        $precioVenta    = $_POST [ 'precioVenta'  ];
        $img            = $_POST [ 'imagen'       ];

        // DESCRIPCION
        $autor          = $_POST [ 'autor'        ];
        $editorial      = $_POST [ 'editorial'    ];
        $categoria      = $_POST [ 'categoria'    ];
        $idioma         = $_POST [ 'idioma'       ];
        $nopaginas      = $_POST [ 'nopaginas'    ];
        $sintesis       = $_POST [ 'sintesis'     ];

        if (!$titulo) {
            $errores[] = "Falta un titulo";
        } 
        if (!$existencias) {
            $errores[] = "Faltan las existencias";
        }
        if (!$precioCompra) {
            $errores[] = "Falta el precio de compra";
        }
        if (!$precioVenta) {
            $errores[] = "Falta el precio de venta";
        }
        if (!$img) {
            $errores[] = "Falta la url de la imagen";
        }
        if (!$autor) {
            $errores[] = "Falta autor";
        }
        if (!$editorial) {
            $errores[] = "Falta editorial";
        }
        if (!$idioma) {
            $erorres[] = "Falta idioma";
        }
        if (!$nopaginas) {
            $errores[] = "Falta el número de páginas";
        }
        if (!$sintesis) {
            $errores[] = "Falta la sintesis";
        }

        $descripcion    = "Autor:".            $autor.      ",".
                          "Editorial:".        $editorial.  ",".
                          "Categoria:".        $categoria.  ",".
                          "Idioma:".           $idioma.     ",".
                          "Numero de páginas:".$nopaginas.   ",".
                          "Sintesis: ".        $sintesis;
                        
        // INSERTAR EN LA BASE DE DATOS
        $query = "INSERT INTO productos (titulo, existencias, precioCompra, precioVenta, descripcion, img) 
                                VALUES ('$titulo', '$existencias', '$precioCompra', '$precioVenta', '$descripcion', '$img')";

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            echo "Insertado Correctamente";
        }
    }

    include '/xampp/htdocs/proyectoWeb/includes/templates/head.php';
?>
    <main>
        <h1>Crear</h1>
        <form class="" method="POST" action="/proyectoWeb/admin/libros/crear.php">
            <fieldset>
                <legend>Informacion general</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo" id="titulo" placeholder="Titulo Libro">

                <label for="existencias">Existencias:</label>
                <input type="number" name="existencias" id="existencias" placeholder="Existencias Libro">

                <label for="precioCompra">Precio de compra:</label>
                <input type="number" name="precioCompra" step="0.01" name="precioCompra" id="precioCompra" placeholder="Precio Compra">

                <label for="precioVenta">Precio de venta:</label>
                <input type="number" name="precioVenta" step="0.01" name="precioVenta" id="precioVenta" placeholder="Precio Compra">

                <label for="imagen">Imagen:</label>
                <input type="text" name="imagen" id="imagen" placeholder="URL de imagen">
            </fieldset>
            <fieldset>
                <legend>Descripcion del libro</legend>
                
                <label for="autor">Autor:</label>
                <input type="text" name="autor" id="autor" placeholder="Autor">

                <label for="editorial">Editorial:</label>
                <input type="text" name="editorial" id="editorial" placeholder="Editorial">

                <label for="categoria">Categoria:</label>
                <select name="categoria" id="categoria">
                    <option value="sinCategoria">Sin categoria</option>
                    <option value="fantasia">Fantasia</option>
                    <option value="ciencia">Ciencia</option>
                    <option value="educacion">Educativos</option>
                </select>

                <label for="idioma">Idioma:</label>
                <input type="text" name="idioma" id="idioma" placeholder="Idioma">

                <label for="nopaginas">No. Páginas:</label>
                <input type="number" name="nopaginas" id="nopaginas" placeholder="Ej: 100" min="1">

                <label for="sintesis">Sintesis:</label>
                <input type="text" name="sintesis" id="sintesis" placeholder="Trata de...">
            </fieldset>
            <input type="submit" value="Crear Libro" class="ñ">
            <a href=""><input class="boton-in" type="button" value="Volver" name="" id=""></a>
        </form>
    </main>
<?php
    
?>