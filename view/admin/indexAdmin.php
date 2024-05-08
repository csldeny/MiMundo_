<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Mundo</title>

    <link href="https://fonts.googleapis.com/css2?family=Slabo+13px&family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- menu -->
    <?php
    require('../components/menuAdmin.php')
    ?>

    <!-- header -->
    <?php
    require('../components/header.php')
    ?>

    <!-- imagen principal -->
    <section class="contenedor">
        <div class="imagen__principal"></div>
    </section>

    <!-- main -->
    <main class="contenedor">

        <div class="agregar">
            <a href="agregarProductoAdmin.php" class="agregar__boton">
                <ion-icon class="link__icono link__icono__ch " name="cube-outline"></ion-icon>
                Agregar</a>
        </div>

        <!-- seccion -->
        <section>
            <!-- cartas -->
            <div class="cartas">
                <!-- carta -->
                <!-- <div class="carta">
                    <div>
                        <img class="carta__imagen" src="../img/ropita1.jpg" alt="ropa infantil">
                    </div>
                    <div class="carta__info">
                        <p class="carta__nombre">Sueter de osito</p>
                        <div class="carta__talla-precio">
                            <div class="carta__talla">
                                <p>Talla:</p>
                                <p class="carta__texto">6M</p>
                            </div>
                            <div class="carta__precio">
                                <p>Precio:</p>
                                <p class="carta__texto">$200</p>
                            </div>
                        </div>
                        <div>   
                            <a class="carta__apartar" href="">
                                <ion-icon class="link__icono link__icono__ch " name="cube-outline"></ion-icon>
                                Editar
                            </a>
                        </div>
                        <div>
                            <a class="carta__apartar" href="">
                                <ion-icon class="link__icono link__icono__ch " name="cube-outline"></ion-icon>
                                Eliminar
                            </a>
                        </div>

                    </div>
                </div> -->
        </section>
    </main>

    <!-- footer -->
    <?php
    require('../components/footer.php');
    ?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../js/script.js"></script>

</body>

</html>