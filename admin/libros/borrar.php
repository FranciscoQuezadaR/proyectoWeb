<?php
    include '../../../proyectoWeb/includes/templates/header_admin.php';
/*
    include '../proyectoWeb/includes/templates/header.php';
    $db = conectarDB();


    $query = "DELETE FROM productos WHERE";

    $resultado []= mysqli_query($db, $query);

    var_dump($resultado);*/

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id) {
        header('Location: ../../../../../proyectoWeb/admin/libros/borrar.php');
    }

    // Importar la conexion
    require '../../includes/config/database.php';
    $bd = conectarDB();

    // Escribir el query
    $query = "SELECT * FROM productos";

    //Consultar la BD
    $resultado = mysqli_query($bd, $query);
?>
<main class="main__admin">
    <section class="seccion__borrar">
        <table class="libros">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Existencias</th>
                    <th>Precio de venta</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($libro = mysqli_fetch_assoc($resultado)):
                ?>
                        <tr>
                            <td><?php echo$libro['id'];?></td>
                            <td><?php echo$libro['titulo'];?></td>
                            <td><?php echo$libro['existencias'];?></td>
                            <td><?php echo$libro['precioVenta'];?></td>
                            <td>
                                <img src="https://png.pngtree.com/png-vector/20190119/ourlarge/pngtree-cartoon-cartoon-bee-bee-little-bee-png-image_474598.jpg" alt="">
                            </td>
                            <td class="acciones">
                                <div class="boton__acciones boton__eliminar"><a href="#">Eliminar</a></div>
                                <!-- <div class="boton__acciones boton__actualizar"><a href="../../../proyectoWeb/admin/libros/actualizar.php?id=<?php echo $libro['id']; ?>">Actualizar</a></div> -->
                            </td>
                        </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </section>
</main>   
<?php
    include '../../../proyectoWeb/includes/templates/footer.php';
    mysqli_close($bd);
?>