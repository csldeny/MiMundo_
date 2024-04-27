<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/inicioSecion.css">
</head>
<body>
    <div id="fondo"></div>
    <seccion class="form-main">
        
        <div class="contenedor">
            <div class="box">
                <h3>Bienvenido</h3>

                <?php
                    
                ?>


                <form method="$_POST" action="">
                    <div class="input-box">
                        <input type="text" placeholder="Correo" class="input">
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Contraseña" class="input">
                        <div class="input-link">
                            <a href="recuperarCuenta.html" class="gradient-text">Haz olvidado tu Contraseña?</a>
                        </div>
                    </div>
                    <a href="index.php" type="submit" class="btn gradient-text">Iniciar Sesión</a>
                </form>
                <p>No tienes cuenta? <a href="crearCuenta.php" class="gradient-text">Registrate</a></p>
            </div>
        </div>
    </seccion>
</body>
</html>