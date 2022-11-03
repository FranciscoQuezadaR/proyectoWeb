<?php
    include '../proyectoWeb/includes/templates/header.php'
?>  
    <main>
        <section class="post__header post__header__producto">

        </section>
        <section class="producto__seleccionado">
            <div class="producto producto__seleccionado__imagen grid__ps1">
                <img src="img/" alt="">
                <img class="img__estandar" src="img/productos/harry-potter-1.jpg" alt="">
                <img src="img/" alt="">
            </div>
            <div class="producto producto__seleccionado__principal grid__ps2">
                <h5 class="producto__seleccionado__titulo">Harry Potter y La Piedra Filosofal</h5>
                <h5 class="texto__left">precio $245.99</h5>
                <h5 class="texto__left">envio $100.00</h5>
                <div class="cantidad__producto">
                    <h5 class="texto__left">cantidad</h5>
                    <input type="number" name="" id="" min="1">
                </div>
                <div class="producto__seleccionado__descripcion">
                    <h5>Caracteristicas del producto</h5>
                    <p class="texto__left">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur quis amet ullam pariatur aut non qui adipisci repudiandae! Tempora explicabo, consequatur fugit obcaecati cupiditate debitis quam quibusdam animi illum deserunt.</p>
                </div>
            </div>
            <div class="producto producto__seleccionado__opciones grid__ps3">
                <div class="producto__seleccionado__op">
                    <img src="img/anadir-a-la-cesta.png" alt="">
                    <h5>añadir a carrito</h5>
                </div>
                <div class="producto__seleccionado__op">
                    <img src="img/amor.png" alt="">
                    <h5>Añadir a favoritos</h5>
                </div>
                <div>
                    <a href="comprar.html"><img src="img/signo-de-dolar.png" alt=""></a>
                    <h5>Comprar ahora</h5>
                </div>
            </div>
        </section>

        <section class="productos__recomendados">
            <div class="producto"></div>
            <div class="producto"></div>
            <div class="producto"></div>
            <div class="producto"></div>
        </section>
       
    </main>
    <?php
        include '../proyectoWeb/includes/templates/footer.php';
    ?>
</body>
</html>