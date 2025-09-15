<?php

class AuthController {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function login($username, $password) {
        // Logic for user login
        // Validate credentials and start session
    }

    public function register($username, $email, $password) {
        // Logic for user registration
        // Create new user in the database
    }

    public function logout() {
        // Logic for user logout
        // Destroy session and redirect to login
    }
}