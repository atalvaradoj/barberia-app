// filepath: login-system/login-system/public/js/scripts.js

document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');

    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (!username || !password) {
                event.preventDefault();
                alert('Please fill in both fields.');
            }
        });
    }

    if (registerForm) {
        registerForm.addEventListener('submit', function(event) {
            const username = document.getElementById('regUsername').value;
            const email = document.getElementById('regEmail').value;
            const password = document.getElementById('regPassword').value;

            if (!username || !email || !password) {
                event.preventDefault();
                alert('Please fill in all fields.');
            }
        });
    }
});