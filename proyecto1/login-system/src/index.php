<?php
// filepath: login-system/login-system/src/index.php

require_once 'config/database.php';
require_once 'controllers/AuthController.php';

session_start();

$controller = new AuthController();

$requestUri = $_SERVER['REQUEST_URI'];

if ($requestUri === '/login') {
    $controller->showLogin();
} elseif ($requestUri === '/register') {
    $controller->showRegister();
} elseif ($requestUri === '/dashboard') {
    $controller->showDashboard();
} elseif ($requestUri === '/logout') {
    $controller->logout();
} else {
    // Default to login page
    $controller->showLogin();
}
?>