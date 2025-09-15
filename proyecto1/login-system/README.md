# Simple Login System

This project is a simple login system built with PHP. It allows users to register, log in, and access a dashboard. The application uses PDO for database interactions and follows the MVC architecture.

## Project Structure

```
login-system
├── src
│   ├── config
│   │   └── database.php
│   ├── controllers
│   │   └── AuthController.php
│   ├── models
│   │   └── User.php
│   ├── views
│   │   ├── login.php
│   │   ├── register.php
│   │   └── dashboard.php
│   └── index.php
├── public
│   ├── css
│   │   └── styles.css
│   ├── js
│   │   └── scripts.js
│   └── .htaccess
├── .env
├── composer.json
└── README.md
```

## Installation

1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Create a `.env` file and configure your database credentials.
4. Run `composer install` to install the necessary dependencies.
5. Set up your web server to point to the `public` directory.

## Usage

- Access the login page at `/login-system/public/login.php`.
- Register a new user or log in with existing credentials.
- After logging in, users will be redirected to the dashboard.

## Contributing

Feel free to submit issues or pull requests for improvements or bug fixes.