<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Mundo</title>

    <link href="https://fonts.googleapis.com/css2?family=Slabo+13px&family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/agregarProductos.css">
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

        <div class="titulo">
            <h1 class="titulo__nombre">Agregar Producto</h1>
        </div>

        <div class="subir-producto">

            <img class="subir-producto__img" src="../img/ropita.jpg" alt="">

            <div class="subir-producto__formulario">

                <h2>Descripcion</h2>

                <form action="" id="formulario">

                    <div>
                        <label for="">Producto</label>
                        <input type="text" id="txtProducto" minlength="1" maxlength="40" required>
                    </div>

                    <div>
                        <label for="">Talla / Edad</label>
                        <input type="text" id="txtTalla" minlength="1" maxlength="10" required>
                    </div>

                    <div>
                        <label for="">Precio</label>
                        <input type="number" id="txtPrecio" minlength="1" maxlength="10" required>
                    </div>
                    
                    <div>
                        <label for="">Temporada</label>
                        <select>
                            <option value="">Primavera</option>
                            <option value="">Verano</option>
                            <option value="">Otoño</option>
                            <option value="">Invierno</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="">Categoria</label>
                        <select name="" id="">
                            <option value="">Sueter</option>
                            <option value="">Camisa</option>
                            <option value="">Blusa</option>
                            <option value="">Vestido</option>
                            <option value="">Pantalon</option>
                            <option value="">Short</option>
                        </select>
                    </div>

                    <div>
                        <button type="submit" id="btnAgregar" href = "indexAdmin.html">Agregar</button>
                    </div>

                </form>
                
            </div>

        </div>     

    </main>

    <!-- footer -->
    <?php
        require('../components/footer.php')
    ?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../js/agregarProductoAdmin.js"></script>
</body>

</html>