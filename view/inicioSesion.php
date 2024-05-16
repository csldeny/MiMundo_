<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/inicioSesion.css">
</head>

<body>
    <seccion>

        <?php
        // Inicializamos variables vacias
        $correo = $contrasenia =  $validado = $error = "";

        // Revisamos si existe un dato en la peticion
        if (isset($_POST["txtEmail"]) && isset($_POST["txtPassword"])) {
            $correo = trim($_POST["txtEmail"]);
            $contrasenia = trim($_POST["txtPassword"]);

            /* Se valida el correo y contrasenia */
            if (filter_var($correo, FILTER_VALIDATE_EMAIL) != false &&
                strlen($contrasenia) >= 8 && strlen($contrasenia) <= 50) 
            {
                /* Verificamos que el usuario exista */
                if ($correo === "admin@gmail.com" && $contrasenia === "12345678") {

                    /* Abrimos la sesion del administrador */
                    session_start();
                    $_SESSION["correo"] = $correo;
                    header("Location: admin/indexAdmin.php");

                }elseif($correo === "user@gmail.com" && $contrasenia === "87654321"){

                    /* Abrimos la sesion del usuario */
                    session_start();
                    $_SESSION["correo"] = $correo;
                    header("Location: index.php");

                }else{
                    $error = `<p class="input-box mensajeInf valido">Correo y/o contraseña incorrectos</p>`;
                }
            }else{
                $validado="validado";
            }
        }
        ?>

        <div class="contenedor">
            <div class="box">
                <h3>Bienvenido</h3>

                <!-- Definimos el metodo en el formulario -->
                <form method="post" class="<?=$validado?>" action="">

                    <!-- Input Correo -->
                    <div class="input-box">
                        <input type="email" placeholder="Correo" class="input" name="txtEmail" pattern="^[\w\-\.]+@([\w\-]+\.)+[\w\-]{2,4}$" maxlength="100" id="txtCorreo" autocomplete="off" value="<?php echo $correo ?>" required>
                        <p class=" mensajeInf">Ingresa un correo valido</p>
                    </div>

                    <!-- Input Contraseña -->
                    <div class="input-box">
                        <div class="inputpassword">
                            <input type="text" placeholder="Contraseña" class="input" name="txtPassword" minlength="8" maxlength="50" id="txtPassword" autocomplete="off" value="<?=$contrasenia ?>" required>
                            <button class="buttonVer" type="button" id="buttonVer">
                                <span id="span"><ion-icon name="eye-outline"></ion-icon></span>
                            </button>
                        </div>
                        <p class="mensajeInf">Ingresa la contraseña</p>

                    </div>

                    <!-- Retroalimentacion -->
                    <?= $error ?>

                    <!-- Recuperar tu conteseña -->
                    <div class="input-box input-link">
                        <a href="recuperarCuenta.php" class="gradient-text">Haz olvidado tu Contraseña?</a>
                    </div>

                    <!-- Botton Iniciar Secion -->
                    <button class="btn gradient-text" id="btnIniciarSesion">Iniciar Sesión</button>
                </form>

                <!-- Enlace para crear cuenta -->
                <p>No tienes cuenta? <a href="crearCuenta.php" class="gradient-text">Registrate</a></p>

            </div>
        </div>
    </seccion>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="js/inicioSesion.js"></script>
</body>

</html>


