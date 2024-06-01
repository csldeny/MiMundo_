document.getElementById('crearCuentaForm').addEventListener('submit', function(event) {
    let valid = true;
    const errors = {
        nombre: "El nombre es requerido.",
        apellidoPaterno: "El apellido paterno es requerido.",
        correo: "El correo es requerido.",
        correoFormato: "El formato del correo no es válido.",
        contrasena: "La contraseña es requerida.",
        confirmarContrasena: "Las contraseñas no coinciden.",
        genero: "El género es requerido."
    };

    // Limpiar mensajes de error
    document.querySelectorAll('.error-message').forEach(el => el.textContent = '');

    // Validar nombre
    const nombre = document.getElementById('nombre').value.trim();
    if (nombre === '') {
        document.getElementById('errorNombre').textContent = errors.nombre;
        valid = false;
    }

    // Validar apellido paterno
    const apellidoPaterno = document.getElementById('apellidoPaterno').value.trim();
    if (apellidoPaterno === '') {
        document.getElementById('errorApellidoPaterno').textContent = errors.apellidoPaterno;
        valid = false;
    }

    // Validar correo
    const correo = document.getElementById('correo').value.trim();
    if (correo === '') {
        document.getElementById('errorCorreo').textContent = errors.correo;
        valid = false;
    } else if (!/\S+@\S+\.\S+/.test(correo)) {
        document.getElementById('errorCorreo').textContent = errors.correoFormato;
        valid = false;
    }

    // Validar contraseñas
    const contrasena = document.getElementById('contrasena').value;
    const confirmarContrasena = document.getElementById('confirmarContrasena').value;
    if (contrasena === '') {
        document.getElementById('errorContrasena').textContent = errors.contrasena;
        valid = false;
    } else if (contrasena !== confirmarContrasena) {
        document.getElementById('errorConfirmarContrasena').textContent = errors.confirmarContrasena;
        valid = false;
    }

    // Validar género
    const genero = document.getElementById('genero').value;
    if (genero === '') {
        document.getElementById('errorGenero').textContent = errors.genero;
        valid = false;
    }

    if (!valid) {
        event.preventDefault();
    }
});

// Toggle password visibility
document.querySelectorAll('.toggle-password').forEach(function(element) {
    element.addEventListener('click', function() {
        const input = this.previousElementSibling;
        const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
        input.setAttribute('type', type);
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });
});