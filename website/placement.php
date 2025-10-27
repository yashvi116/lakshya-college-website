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
            <h2>Our Placement Stars</h2>
            <div class="placement-grid">
                <div class="placement-card">
                    <img src="img/P_Rohit Sarma.jpg" alt="Rohit Sharma">
                    <h3>Rohit Sharma</h3>
                    <p class="branch">B.Tech - Computer Science</p>
                    <p>Placed at <span class="company">Infosys</span></p>
                </div>
                <div class="placement-card">
                    <img src="img/P_Priya singh.jpg" alt="Priya Singh">
                    <h3>Priya Singh</h3>
                    <p class="branch">B.Tech - Electronics</p>
                    <p>Placed at <span class="company">TCS</span></p>
                </div>
                <div class="placement-card">
                    <img src="img/P_Arjun Patel.jpg" alt="Arjun Patel">
                    <h3>Arjun Patel</h3>
                    <p class="branch">B.Tech - Mechanical</p>
                    <p>Placed at <span class="company">Wipro</span></p>
                </div>
                <div class="placement-card">
                    <img src="img/P_Neha verma.jpg" alt="Neha Verma">
                    <h3>Neha Verma</h3>
                    <p class="branch">MCA</p>
                    <p>Placed at <span class="company">Amazon</span></p>
                </div>
                <div class="placement-card">
                    <img src="img/P_Vikas Kumar.jpg" alt="Vikas Kumar">
                    <h3>Vikas Kumar</h3>
                    <p class="branch">BCA</p>
                    <p>Placed at <span class="company">Capgemini</span></p>
                </div>
                <div class="placement-card">
                    <img src="img/P_Sneha Gupta.jpg" alt="Sneha Gupta">
                    <h3>Sneha Gupta</h3>
                    <p class="branch">M.Tech - Civil</p>
                    <p>Placed at <span class="company">Microsoft</span></p>
                </div>
                <!-- Add more student cards as needed -->
            </div>
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
    max-width: 1100px;
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
.placement-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 32px;
    margin-top: 32px;
}
.placement-card {
    background: #f7faff;
    border-radius: 14px;
    box-shadow: 0 2px 8px rgba(45,91,227,0.06);
    padding: 24px 16px 18px 16px;
    text-align: center;
    transition: transform 0.2s, box-shadow 0.2s;
}
.placement-card:hover {
    transform: translateY(-6px) scale(1.03);
    box-shadow: 0 8px 24px rgba(45,91,227,0.13);
}
.placement-card img {
    width: 90px;
    height: 90px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 14px;
    border: 3px solid #003366;
}
.placement-card h3 {
    margin: 10px 0 4px 0;
    color: #003366;
    font-size: 1.15rem;
}
.placement-card .branch {
    color: #555;
    font-size: 0.98rem;
    margin-bottom: 8px;
}
.placement-card p {
    color: #444;
    margin: 0;
}
.company {
    color: #003366;
    font-weight: 600;
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
    .placement-grid {
        gap: 18px;
    }
}
    </style>