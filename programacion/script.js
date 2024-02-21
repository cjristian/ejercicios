function login() {
    // Obtener valores del formulario
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Crear objeto de datos para enviar al servidor
    var data = {
        username: username,
        password: password
    };

    // Configuración de la solicitud fetch
    fetch('tu_url_de_login.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Error en la solicitud');
        }
        return response.json();
    })
    .then(data => {
        // Manejar la respuesta exitosa del servidor
        document.getElementById('result').innerText = 'Inicio de sesión exitoso';
    })
    .catch(error => {
        // Manejar errores de la solicitud
        document.getElementById('result').innerText = 'Error: ' + error.message;
    });
}
