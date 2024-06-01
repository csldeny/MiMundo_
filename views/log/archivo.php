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
        .input-box {
            position: relative;
        }
        .input-box input {
            padding-right: 40px; /* Asegura que haya espacio para el ícono del ojo */
        }
        .toggle-password {
            position: absolute;
            right: -25px; /* Ajusta esto para mover más a la derecha el ícono */
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .error-message {
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div id="fondo"></div>
    <section class="form-main">
        <div class="contenedor">
            <div class="box">
                <h3>Crear tu Cuenta</h3>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nombre = trim($_POST['nombre']);
                    $apellido_paterno = trim($_POST['apellido_paterno']);
                    $apellido_materno = trim($_POST['apellido_materno']);
                    $correo = trim($_POST['correo']);
                    $contrasena = $_POST['contrasena'];
                    $confirmar_contrasena = $_POST['confirmar_contrasena'];
                    $genero = $_POST['genero'];

                    $errors = [];

                    // Validar nombre
                    if (empty($nombre)) {
                        $errors['nombre'] = "El nombre es requerido.";
                    }

                    // Validar apellido paterno
                    if (empty($apellido_paterno)) {
                        $errors['apellido_paterno'] = "El apellido paterno es requerido.";
                    }

                    // Validar correo
                    if (empty($correo)) {
                        $errors['correo'] = "El correo es requerido.";
                    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                        $errors['correo'] = "El formato del correo no es válido.";
                    }

                    // Validar contraseñas
                    if (empty($contrasena)) {
                        $errors['contrasena'] = "La contraseña es requerida.";
                    } elseif ($contrasena !== $confirmar_contrasena) {
                        $errors['confirmar_contrasena'] = "Las contraseñas no coinciden.";
                    }

                    // Validar género
                    if (empty($genero)) {
                        $errors['genero'] = "El género es requerido.";
                    }

                    if (empty($errors)) {
                        echo "<p style='color: green;'>¡Cuenta creada con éxito!</p>";

                    }
                }
                ?>

                <form id="crearCuentaForm" method="POST" action="">
                    <div class="input-box">
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="input" value="<?php echo isset($nombre) ? $nombre : ''; ?>" >
                        <p class="error-message" id="errorNombre"><?php echo isset($errors['nombre']) ? $errors['nombre'] : ''; ?></p>
                    </div>
                    <div class="input-box">
                        <input type="text" id="apellidoPaterno" name="apellido_paterno" placeholder="Apellido Paterno" class="input" value="<?php echo isset($apellido_paterno) ? $apellido_paterno : ''; ?>">
                        <p class="error-message" id="errorApellidoPaterno"><?php echo isset($errors['apellido_paterno']) ? $errors['apellido_paterno'] : ''; ?></p>
                    </div>
                    <div class="input-box">
                        <input type="text" id="apellidoMaterno" name="apellido_materno" placeholder="Apellido Materno" class="input" value="<?php echo isset($apellido_materno) ? $apellido_materno : ''; ?>">
                        <p class="error-message" id="errorApellidoMaterno"><?php echo isset($errors['apellido_materno']) ? $errors['apellido_materno'] : ''; ?></p>
                    </div>
                    <div class="input-box">
                        <input type="email" id="correo" name="correo" placeholder="Correo" class="input" value="<?php echo isset($correo) ? $correo : ''; ?>">
                        <p class="error-message" id="errorCorreo"><?php echo isset($errors['correo']) ? $errors['correo'] : ''; ?></p>
                    </div>
                    <div class="input-box">
                        <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" class="input">
                        <i class="far fa-eye toggle-password" id="togglePassword"></i>
                        <p class="error-message" id="errorContrasena"><?php echo isset($errors['contrasena']) ? $errors['contrasena'] : ''; ?></p>
                    </div>
                    <div class="input-box">
                        <input type="password" id="confirmarContrasena" name="confirmar_contrasena" placeholder="Confirmar Contraseña" class="input">
                        <i class="far fa-eye toggle-password" id="toggleConfirmPassword"></i>
                        <p class="error-message" id="errorConfirmarContrasena"><?php echo isset($errors['confirmar_contrasena']) ? $errors['confirmar_contrasena'] : ''; ?></p>
                    </div>
                    <div class="input-box">
                        <select id="genero" name="genero" class="input">
                            <option value="">Género</option>
                            <option value="masculino" <?php echo (isset($genero) && $genero == 'masculino') ? 'selected' : ''; ?>>Masculino</option>
                            <option value="femenino" <?php echo (isset($genero) && $genero == 'femenino') ? 'selected' : ''; ?>>Femenino</option>
                            <option value="otro" <?php echo (isset($genero) && $genero == 'otro') ? 'selected' : ''; ?>>Otro</option>
                        </select>
                        <p class="error-message" id="errorGenero"><?php echo isset($errors['genero']) ? $errors['genero'] : ''; ?></p>
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