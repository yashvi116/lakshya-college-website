<?php
include 'header.php';
?>
<section>
        <header>
        <img src="logo.jfif" alt="Lakshya College Logo" class="logo"/>
        <h1>Lakshya Engineering College</h1>
        
    </header>
    <main>
        <div class="container">
            <h2>Admission Form</h2>
            <form class="admission-form" action="admission_process.php" method="post">
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" required placeholder="Enter your full name">
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number">
                </div>
                <div class="form-group">
                    <label for="courses">Select Courses</label>
                    <select id="courses" name="courses[]" multiple required size="6">
                        <option value="" disabled>-- Select Course(s) --</option>
                        <option value="btech">B.Tech</option>
                        <option value="bca">BCA</option>
                        <option value="mca">MCA</option>
                        <option value="mtech">M.Tech</option>
                        <option value="bscit">B.Sc IT</option>
                        <option value="diploma">Diploma (Engineering)</option>
                    </select>
                 </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Create a password">
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" required placeholder="Confirm your password">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <div class="radio-group">
                        <label><input type="radio" name="gender" value="male"> Male</label>
                        <label><input type="radio" name="gender" value="female"> Female</label>
                        <label><input type="radio" name="gender" value="other"> Other</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" name="address" rows="3" required placeholder="Enter your address"></textarea>
                </div>
                <button type="submit" name="submit">Submit Application</button>
            </form>
        </div>
    </main>
    <footer>
        &copy; 2025 Lakshya Engineering College. All rights reserved.
    </footer>
</section>
<style>
        body {
    font-family: 'Segoe UI', Arial, sans-serif;
    background: linear-gradient(120deg, #f0f4f9 0%, #d9e7fa 100%);
    margin: 0;
    padding: 0;
}
header {
    background: #003366;
    color: #fff;
    padding: 40px 0 20px 0;
    text-align: center;
    border-bottom-left-radius: 40px;
    border-bottom-right-radius: 40px;
    box-shadow: 0 4px 16px rgba(45,91,227,0.1);
}
.logo {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    margin-bottom: 10px;
}
header h1 {
    margin: 0;
    font-size: 2.2rem;
    letter-spacing: 2px;
}
nav ul {
    list-style: none;
    padding: 0;
    margin: 20px 0 0 0;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 18px;
}
nav a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.2s;
}
nav a:hover, nav a:focus {
    color: #ffd700;
}
.container {
    max-width: 500px;
    margin: 40px auto;
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 8px 32px rgba(45,91,227,0.08);
    padding: 40px 32px;
}
h2 {
    color: #003366;
    margin-top: 0;
    text-align: center;
}
.admission-form {
    display: flex;
    flex-direction: column;
    gap: 18px;
}
.form-group {
    display: flex;
    flex-direction: column;
    gap: 6px;
}
.radio-group {
    display: flex;
    gap: 12px;
    align-items: center;
}
.error {
    color: #c0392b;
    font-size: 0.9rem;
}
label {
    font-weight: 500;
    color: #003366;
}
input, select, textarea {
    padding: 10px 12px;
    border: 1px solid #c3d3f5;
    border-radius: 8px;
    font-size: 1rem;
    background: #f7faff;
    transition: border 0.2s;
}
input:focus, select:focus, textarea:focus {
    border: 1.5px solid #003366;
    outline: none;
}
button[type="submit"] {
    background: #003366;
    color: #fff;
    border: none;
    padding: 12px 0;
    border-radius: 8px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    /* transition: background 0.2s; */
}
button[type="submit"]:hover {
    background: #003366;
}
footer {
    text-align: center;
    padding: 24px 0;
    color: #888;
    background: #f0f4f9;
    border-top: 1px solid #e0e7ef;
    margin-top: 40px;
}
@media (max-width: 700px) {
    .container {
        padding: 18px 8px;
    }
    nav ul {
        flex-direction: column;
        gap: 10px;
    }
}
    </style>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.admission-form');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirm_password');
    const courses = document.getElementById('courses');

    function showError(el, message) {
        let next = el.nextElementSibling;
        if (!next || !next.classList.contains('error')) {
            next = document.createElement('div');
            next.className = 'error';
            el.parentNode.insertBefore(next, el.nextSibling);
        }
        next.textContent = message;
    }

    function clearError(el) {
        const next = el.nextElementSibling;
        if (next && next.classList.contains('error')) next.remove();
    }

    form.addEventListener('submit', function (e) {
        let valid = true;
        // password match
        if (password.value !== confirmPassword.value) {
            showError(confirmPassword, 'Passwords do not match');
            valid = false;
        } else {
            clearError(confirmPassword);
        }

        // at least one course selected
        const selected = Array.from(courses.options).some(opt => opt.selected);
        if (!selected) {
            showError(courses, 'Please select at least one course');
            valid = false;
        } else {
            clearError(courses);
        }

        if (!valid) {
            e.preventDefault();
        }
    });
});
</script>
