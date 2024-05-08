<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/inicioSecion.css">
</head>

<body>
    <seccion class="form-main">
        <div class="contenedor">
            <div class="box">
                <h3>Bienvenido</h3>
                <form method="$_POST" action="">
                    <div class="input-box">
                        <input type="text" placeholder="Correo" class="input">
                        <p class="mensajeInf">Ingresa un correo valido</p>
                    </div>
                    <div class="input-box">
                        <div class="inputpassword">
                            <input type="password" placeholder="Contraseña" class="input">
                            <button class="buttonVer" type="button" >
                                <ion-icon name="eye-outline"></ion-icon>
                            </button>
                        </div>
                        <p class="mensajeInf">Ingresa la contraseña</p>
                        <div class="input-link">
                            <a href="recuperarCuenta.php" class="gradient-text">Haz olvidado tu Contraseña?</a>
                        </div>
                    </div>
                    <a href="index.php" type="submit" class="btn gradient-text">Iniciar Sesión</a>
                </form>
                <p>No tienes cuenta? <a href="crearCuenta.php" class="gradient-text">Registrate</a></p>
            </div>
        </div>
    </seccion>
</body>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>