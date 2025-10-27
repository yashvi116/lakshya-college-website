<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Lakshya Engineering College</title>
  <style>
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }
    body {
      background-color: #f4f4f4;
      color: #333;
      line-height: 1.6;
    }
    header {
      background-color: #003366;
      color: #fff;
      padding: 20px 0 30px 0;
      text-align: center;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      
    
}
    
    .logo {
      width: 70px;
      height: auto;
      position: absolute;
      top: 20px;
      left: 30px;
    }
    header h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
      letter-spacing: 2px;
      

    }
    nav ul {
      display: flex;
      justify-content: center;
      list-style: none;
      margin-top: 20px;
      flex-wrap: wrap;
    }
    nav ul li {
      margin: 0 18px;
    }
    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      font-size: 1.1rem;
      transition: color 0.3s;
    }
    nav ul li a:hover {
      color: #ffcc00;
    }
    main {
      padding: 40px 20px;
      background-color: #fff;
      text-align: center;
    }
    main h2 {
      font-size: 2rem;
      margin-bottom: 15px;
      color: #003366;
    }
    main p {
      font-size: 1.2rem;
    }
    .container {
      margin: 40px auto 0 auto;
      max-width: 1200px;
      display: flex;
      gap: 25px;
      flex-wrap: wrap;
      justify-content: center;
    }
    .container img {
      width: 200px;
      height: 140px;
      object-fit: cover;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.15);
      margin-bottom: 10px;
    }
    footer {
      background-color: #003366;
      color: #fff;
      text-align: center;
      padding: 15px 0;
      margin-top: 40px;
      width: 100%;
    }
  </style>
</head>
<body>
  <header>
    <img src="logo.jfif" alt="Lakshya College Logo" class="logo"/>
    <h1>Lakshya Engineering College</h1>
    <nav>
      <ul>
        <li><a href="home.php">Dashboard</a></li>
        <li><a href="campus.php">Campus</a></li>
        <li><a href="acodemics.php">Academics</a></li>
        <li><a href="admission.php">Admission</a></li>
        <li><a href="placement.php">Placements</a></li>
        <li><a href="events.php">Events</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="conact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h2>Welcome to Lakshya Engineering College</h2>
    <p>Your personal academic planner and productivity companion!</p>
  </main>
  <div class="container">
    <img src="img/des-1.jpeg" alt="Campus 1"/>
    <img src="img/des-2.jfif" alt="Campus 2"/>
    <img src="img/des-3.jfif" alt="Campus 3"/>
    <img src="img/des-4.jfif" alt="Campus 4"/>
    <img src="img/des-5.jfif" alt="Campus 5"/>
    <img src="img/des-6.jfif" alt="Campus 6"/>
    <img src="img/des-7.jfif" alt="Campus 7"/>
  </div>
  <footer>
    &copy; 2025 Lakshya Engineering College. All rights reserved.
  </footer>
</body>
</html>