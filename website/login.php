<?php
include 'header.php';
?>
<section>
    
    <div class="login-container">
        <h2>Welcome to Lakshya Engineering College </h2>
        <form action="process_login.php" method="post" class="login-form">
            <label for="username">Username or Email</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
            <p class="signup-link">Admission to you Lakshya Engineering College <a href="admission.php">Admission</a></p>
        </form>
</section>
<style>
    body {
        font-family: 'Segoe UI', Arial, sans-serif;
        background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%);
        margin: 0;
        padding: 0;
    }

    .login-container {
        background: #fff;
        max-width: 350px;
        margin: 60px auto;
        padding: 32px 28px;
        border-radius: 14px;
        box-shadow: 0 6px 32px rgba(60, 72, 88, 0.12);
        text-align: center;
    }

    .login-container h2 {
        margin-bottom: 24px;
        color: #3b4cca;
        font-size: 2rem;
        font-weight: 600;
    }

    .login-form label {
        display: block;
        text-align: left;
        margin-bottom: 6px;
        color: #374151;
        font-size: 1rem;
        font-weight: 500;
    }

    .login-form input[type="text"],
    .login-form input[type="password"] {
        width: 100%;
        padding: 10px 12px;
        margin-bottom: 18px;
        border: 1px solid #cbd5e1;
        border-radius: 8px;
        font-size: 1rem;
        background: #f1f5f9;
        transition: border-color 0.2s;
    }

    .login-form input:focus {
        border-color: #3b4cca;
        outline: none;
    }

    .login-form button {
        width: 100%;
        padding: 12px;
        background: #3b4cca;
        color: #fff;
        border: none;
        border-radius: 8px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s;
    }

    .login-form button:hover {
        background: #253a8a;
    }

    .signup-link {
        margin-top: 18px;
        font-size: 0.98rem;
        color: #64748b;
    }

    .signup-link a {
        color: #3b4cca;
        text-decoration: none;
        font-weight: 500;
    }

    .signup-link a:hover {
        text-decoration: underline;
    }
    </style>
