<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/inicioSesion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .error {
            border: 1px solid red;
        }

        .error-message {
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
        }

        .input-box {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: -25px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>

<body>

    <?php

    require_once("../../data/DAOUsuario.php");
    require_once("../../model/Usuario.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $usuario = new Usuario();

       // var_dump($_POST);
        echo "Adentro";
        echo "<br/>";

        $usuario->nombre = $_POST['nombre'];
        $usuario->apellido1 = $_POST['apellido1'];
        $usuario->apellido2 = $_POST['apellido2'];
        $usuario->email = $_POST['correo'];
        $usuario->contrasenia = $_POST['contrasenia'];
        $usuario->genero = $_POST['genero'];
        $usuario->rol = "user";

        $dao = new DAOUsuario();

        if ($dao->agregar($usuario) > 0) {
            //var_dump($_POST);
            echo "<br/>";
            echo "<br/>";

            // Redirige al administrador si la inserción es exitosa
            header("Location: inicioSesion.php");
        } else {
            // Muestra un mensaje de error si falla la inserción
            $error = 'Error al agregar usuario';
        }
    }

    ?>

    <div id="fondo"></div>
    <section class="form-main">
        <div class="contenedor">
            <div class="box">
                <h3>Crear tu Cuenta</h3>
                <form id="crearCuentaForm" method="post" action="crearCuenta.php">
                    <div class="input-box">
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="input">
                        <p class="error-message" id="errorNombre"></p>
                    </div>
                    <div class="input-box">
                        <input type="text" id="apellidoPaterno" name="apellido1" placeholder="Apellido Paterno" class="input">
                        <p class="error-message" id="errorApellidoPaterno"></p>
                    </div>
                    <div class="input-box">
                        <input type="text" id="apellidoMaterno" name="apellido2" placeholder="Apellido Materno" class="input">
                        <p class="error-message" id="errorApellidoMaterno"></p>
                    </div>
                    <div class="input-box">
                        <input type="email" id="correo" name="correo" placeholder="Correo" class="input">
                        <p class="error-message" id="errorCorreo"></p>
                    </div>
                    <div class="input-box">
                        <input type="password" id="contrasena" name="contrasenia" placeholder="Contraseña" class="input" pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}">
                        <i class="far fa-eye toggle-password" id="togglePassword"></i>
                        <p class="error-message" id="errorContrasena"></p>
                    </div>
                    <div class="input-box">
                        <input type="password" id="confirmarContrasena" name="confirmar_contrasena" placeholder="Confirmar Contraseña" class="input">
                        <i class="far fa-eye toggle-password" id="toggleConfirmPassword"></i>
                        <p class="error-message" id="errorConfirmarContrasena"></p>
                    </div>
                    <div class="input-box">
                        <select id="genero" name="genero" class="input">
                            <option value="">Género</option>
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                            <option value="otro">Otro</option>
                        </select>
                        <p class="error-message" id="errorGenero"></p>
                    </div>
                    <button type="submit" class="btn gradient-text">Crear Cuenta</button>
                </form>
                <p>Ya tienes cuenta? <a href="inicioSesion.php" class="gradient-text">Iniciar Sesión</a></p>
            </div>
        </div>
    </section>
    <script src="../js/crearcuenta.js"></script>
</body>

</html>