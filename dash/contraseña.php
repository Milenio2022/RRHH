    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    </head>

    <body>

        <div class="container mt-5">
            <h2 class="text-success">Cambiar contraseña</h2>
            <form action="recibir_datos.php" method="post">
                <div class="mb-3">
                    <label for="contrasenaActual" class="form-label">Contraseña actual:</label>
                    <input type="password" class="form-control" id="contrasenaActual" name="contrasenaActual" required>
                </div>

                <div class="mb-3">
                    <label for="nuevaContrasena" class="form-label">Nueva contraseña:</label>
                    <input type="password" class="form-control" id="nuevaContrasena" name="nuevaContrasena" required>
                </div>

                <div class="mb-3">
                    <label for="confirmarContrasena" class="form-label">Confirmar nueva contraseña:</label>
                    <input type="password" class="form-control" id="confirmarContrasena" name="confirmarContrasena"
                        required>
                </div>

                <button type="submit" class="btn btn-success">Cambiar contraseña</button>
                <button type="button" class="btn btn-danger" id="resetearValores">Resetear valores</button>
            </form>
            <div class="alert alert-secondary mt-3" role="alert" id="mensaje">
                <!-- Mensajes de éxito o error aparecerán aquí -->
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
        <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            const form = this;
            const formData = new FormData(form);

            fetch(form.action, {
                    method: form.method,
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    const mensaje = document.getElementById('mensaje');
                    if (data.success) {
                        mensaje.innerHTML = `
                <div class="alert alert-success" role="alert">
                ${data.message}
                </div>
                <p>Contraseña restablecida: ${data.password}</p>
            `;
                    } else {
                        mensaje.innerHTML = `
                <div class="alert alert-danger" role="alert">
                ${data.message}
                </div>
            `;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });

        // Función para resetear los valores de los campos
        document.getElementById('resetearValores').addEventListener('click', function() {
            document.getElementById('contrasenaActual').value = '';
            document.getElementById('nuevaContrasena').value = '';
            document.getElementById('confirmarContrasena').value = '';
        });
        </script>
    </body>

    </html>