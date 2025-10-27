# 🎓 Lakshya College Website

A basic college website built using **HTML, CSS, PHP, and MySQL**.

## 📁 Project Structure
- `index.php` – Home page
- `about.php` – About college
- `contact.php` – Contact form
- `config.php` – Database connection (DO NOT upload real credentials)
- `database/` – SQL backup (if any)

## ⚙️ How to Run Locally (XAMPP)
1. Install XAMPP and start **Apache** and **MySQL**.
2. Copy this project folder into `C:\xampp\htdocs\lakshya-college-website`.
3. Open `http://localhost/phpmyadmin` → create database (e.g., `lakshya_db`) → Import `database/lakshya.sql` if available.
4. Open browser: `http://localhost/lakshya-college-website`

## 🔐 Important
- Do **not** commit real DB passwords. Use `config.example.php` instead of `config.php` in repo.

## 💡 Features
- Simple PHP pages
- Contact form (stores data in MySQL)

