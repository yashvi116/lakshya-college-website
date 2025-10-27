<?php
include 'header.php';
?>

<section>
    
    <header>
        <h1>Academics</h1>
        <nav>
            <a href="acodemics.php">Home</a>
            <a href="courses.php">Courses</a>
            <a href="faculty.php">Faculty</a>
        </nav>
    </header>
    <div class="container">
        <h2>Our Programs</h2>
        <div class="card-list">
            <div class="card">
                <h3>Undergraduate Studies</h3>
                <p>Explore a wide range of undergraduate programs designed to inspire and challenge students for future success.</p>
            </div>
            <div class="card">
                <h3>Postgraduate Studies</h3>
                <p>Advance your knowledge and career with our specialized postgraduate degrees and research opportunities.</p>
            </div>
            <div class="card">
                <h3>Online Learning</h3>
                <p>Flexible online courses and certifications to help you learn at your own pace, anytime and anywhere.</p>
            </div>
        </div>
        <h2 style="margin-top:40px;">Why Choose Us?</h2>
        <ul>
            <li>Experienced and dedicated faculty</li>
            <li>Modern campus and facilities</li>
            <li>Strong industry connections</li>
            <li>Vibrant student community</li>
        </ul>
    </div>
    <footer>
        &copy; 2025 Academics. All rights reserved.
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
        header h1 {
            margin: 0;
            font-size: 2.8rem;
            letter-spacing: 2px;
        }
        nav {
            margin-top: 20px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 18px;
            font-weight: 500;
            transition: color 0.2s;
        }
        nav a:hover {
            color: #ffd700;
        }
        .container {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(45,91,227,0.08);
            padding: 40px 32px;
        }
        h2 {
            color: #2d5be3;
            margin-top: 0;
        }
        .card-list {
            display: flex;
            flex-wrap: wrap;
            gap: 28px;
            margin-top: 24px;
        }
        .card {
            flex: 1 1 260px;
            background: #f7faff;
            border-radius: 14px;
            box-shadow: 0 2px 8px rgba(45,91,227,0.06);
            padding: 24px;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .card:hover {
            transform: translateY(-6px) scale(1.03);
            box-shadow: 0 8px 24px rgba(45,91,227,0.13);
        }
        .card h3 {
            margin-top: 0;
            color: #1a3a7c;
        }
        .card p {
            color: #444;
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
            .card-list {
                flex-direction: column;
                gap: 18px;
            }
        }
        </style>