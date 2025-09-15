<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Include the User model to retrieve user information
require_once '../models/User.php';

// Create a new User instance
$userModel = new User();
$user = $userModel->getUserById($_SESSION['user_id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="../../public/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo htmlspecialchars($user['username']); ?>!</h1>
        <p>This is your dashboard.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>