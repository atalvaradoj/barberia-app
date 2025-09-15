<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - Barbería Hola</title>
    <link rel="stylesheet" href="../../public/css/styles.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <img src="../../img/login-imagen.png" alt="Imagen de inicio de sesión" class="login-image">
            <h1>Iniciar Sesión</h1>
            <p>Acceder a tu cuenta</p>
            
            <form action="/src/controllers/AuthController.php?action=login" method="POST">
                <div class="form-group">
                    <label for="username">Usuario:</label>
                    <input type="text" id="username" name="username" placeholder="Ingresa tu usuario" required>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                </div>

                <div class="form-group">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Recuérdame</label>
                </div>

                <button type="submit" class="btn">Iniciar Sesión</button>
            </form>

            <p>¿No tienes una cuenta? <a href="register.php">Regístrate aquí</a></p>
        </div>
    </div>
</body>
</html>
