<?php
// filepath: c:\Users\jeral\OneDrive\Escritorio\Proyecto Barberia - Aplicacion web SaaS\index.php

// Autoload de Composer (si usas librerías externas)
require_once __DIR__ . '/vendor/autoload.php';

// Configuración inicial
require_once __DIR__ . '/config/config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Barbería</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Bienvenido a la Barbería</h1>
    </header>
    <main>
        <?php
        // Enrutador básico
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        switch ($uri) {
            case '/':
                require_once __DIR__ . '/views/landing.php';
                break;
            case '/login':
                require_once __DIR__ . '/views/login.php';
                break;
            case '/dashboard':
                require_once __DIR__ . '/views/dashboard.php';
                break;
            default:
                http_response_code(404);
                echo "Página no encontrada.";
                break;
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2025 Barbería SaaS</p>
    </footer>
</body>
</html>