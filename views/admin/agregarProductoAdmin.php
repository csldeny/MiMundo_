<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Mundo</title>

    <link href="https://fonts.googleapis.com/css2?family=Slabo+13px&family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/agregarProductos.css">
</head>

<body>
    <?php
    // menu
    require('../components/menuAdmin.php');

    // header
    require('../components/header.php');
    
    // Obtenemos el DAO
    require_once("../../data/DAOProducto.php");

    // Instanciamos 
    $producto = new Producto();

    // Inicializamos el error en blanco
    $error = "";

    var_dump($_POST);

    // Si en la peticion es un get y envian solo el id y es numerico
    // Entonces el usuario quiere editar, por lo que se obtendran los datos del usuario
    if (isset($_GET["idProducto"]) && is_numeric($_GET["idProducto"])) {

        // se asigna el objeto a la variable productos
        $producto = (new DAOProducto())->obtenerUno((int) $_GET["idProducto"]);

        // valida que exista el producto
        // que otro admin no lo halla eliminado
        if($producto == null){
            echo "Producto inexistente";
            header("Location: indexAdmin.php");
        }

      // Si en la peticion es post y es mayor a 0 
      // Entonces agrega 
    } elseif (count($_POST) > 0) {

        // Asignamos el
        $producto->idProducto = $_POST["txtId"];
        $producto->producto = $_POST["txtNombre"];
        $producto->talla = $_POST["txtApellido1"];
        $producto->precio = $_POST["txtApellido2"];
        $producto->categoria = $_POST["txtEmail"];
        $producto->temporada = $_POST["txtPassword"];

        $validado = "";

        //Validar los datos
        if (
            strlen($producto->producto) >= 2 && strlen($producto->producto) <= 30 &&
            strlen($usuario->apellido1) >= 2 && strlen($usuario->apellido1) <= 30 &&
            strlen($usuario->apellido2) >= 2 && strlen($usuario->apellido2) <= 30 &&
            filter_var($usuario->correo, FILTER_VALIDATE_EMAIL) != false &&
            ($usuario->rol == 'admin' || $usuario->rol == 'empleado' || $usuario->rol == 'cliente') &&
            ($usuario->genero == 'M' || $usuario->genero == 'F' || $usuario->genero == 'I')
        ) {

            $dao = new DAOUsuario();
            if ($usuario->id == 0) {
                //Revisar la contraseña
                if (strlen($usuario->contrasenia) >= 6 && strlen($usuario->contrasenia) <= 20) {
                    if ($usuario = $dao->agregar($usuario) > 0) {
                        $_SESSION["msg"] = "alert-successs--Usuario almacenado correctamente";
                        header("Location: listaUsuarios.php");
                    } else {
                        $error = '<div class="alert alert-danger alert-dismissible fade show">
            El usuario no se ha podido almacenar <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
                    }
                } else {
                    $validado = "validado";
                }
            } else {
                if ($usuario = $dao->editar($usuario)) {
                    $_SESSION["msg"] = "alert-successs--Usuario almacenado correctamente";
                    header("Location: listaUsuarios.php");
                } else {
                    $error = '<div class="alert alert-danger alert-dismissible fade show">
          El usuario no se ha podido almacenar <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
                }
            }
        } else {
            $validado = "validado";
        }
    }
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

            <img class="subir-producto__img" src="../img/MiMundoImg.jpg" alt="">

            <div class="subir-producto__formulario">

                <h2>Descripcion</h2>

                <form action="" id="formulario">

                    <div>
                        <label for="">Producto</label>
                        <input type="text" id="txtProducto" pattern="^[a-zA-Z]{5,40}$" minlength="5" maxlength="40" required>
                        <p class="mensajeInf">Ingresa el nombre del producto</p>
                    </div>

                    <div>
                        <label for="">Talla / Edad</label>
                        <input type="text" id="txtTalla" minlength="1" maxlength="10" required>
                        <p class="mensajeInf">Ingresa un formato valido</p>
                    </div>

                    <div>
                        <label for="">Precio</label>
                        <input type="number" id="txtPrecio" minlength="1" maxlength="10" required>
                        <p class="mensajeInf">Ingresa solo numeros</p>
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
                        <button type="submit" id="btnAgregar" href="indexAdmin.html">Agregar</button>
                    </div>

                </form>

            </div>

        </div>

    </main>

    <?php
    // footer
    require('../components/footer.php')
    ?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../js/agregarProductoAdmin.js"></script>
    <script src="../js/cerrarSesionAdmin.js"></script>
</body>

</html>