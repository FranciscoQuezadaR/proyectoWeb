<?php
    include '../proyectoWeb/includes/templates/header.php'
?>
    <main class="main__contacto">
        <section class="section__form">
            <form class="formulario">
                <fieldset>
                    <div class="contacto">
                        <div class="legend">
                            <legend>Contactanos</legend>
                        </div>
                        <div class="campo">
                            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
                        </div>
                        <div class="campo">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="campo">
                            <textarea name="" id="" placeholder="Cuentanos, ¿que paso?"></textarea>
                        </div>
                        <div class="campo campo-btn-a">
                            <a class="boton enlace-boton" href="">Enviar</a>
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