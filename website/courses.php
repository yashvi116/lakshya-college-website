<?php
include 'header.php';
?>
  <style>
  body {
  margin: 0;
  font-family: 'Segoe UI', sans-serif;
  background-color: #f2f6fc;
  color: #333;
}

header {
  background-color: #004080;
  color: white;
  text-align: center;
  padding: 30px 20px;
}

.course-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 25px;
  padding: 30px;
  max-width: 1200px;
  margin: auto;
}

.course-card {
  background-color: white;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
  text-align: center;
  transition: transform 0.2s;
}

.course-card:hover {
  transform: translateY(-5px);
}

.course-card h2 {
  color: #004080;
}

button {
  margin-top: 15px;
  padding: 10px 20px;
  border: none;
  background-color: #004080;
  color: white;
  border-radius: 6px;
  cursor: pointer;
}

button:hover {
  background-color: #003366;
}

footer {
  background-color: #004080;
  color: white;
  text-align: center;
  padding: 15px;
  margin-top: 40px;
}
</style>

<section>
  <header>
    <h1> Engineering Courses</h1>
    <p>Explore a variety of technical and professional degree programs.</p>
  </header>

  <main class="course-container">
    <div class="course-card">
      <h2>BCA</h2>
      <p>Bachelor of Computer Applications – 3 Years</p>
      
    </div>
    <div class="course-card">
      <h2>MCA</h2>
      <p>Master of Computer Applications – 2 Years</p>
      
    </div>
    <div class="course-card">
      <h2>B.Tech</h2>
      <p>Bachelor of Technology – 4 Years</p>
      
    </div>
    <div class="course-card">
      <h2>Diploma</h2>
      <p>Diploma in Engineering – 3 Years</p>
      
    </div>
    <div class="course-card">
      <h2>B.Sc IT</h2>
      <p>Bachelor of Science in Information Technology – 3 Years</p>
      
    </div>
    <div class="course-card">
      <h2>M.Tech</h2>
      <p>Master of Technology – 2 Years</p>
      
    </div>
  </main>

  <footer>
    <p>&copy; 2025 Your College Name. All Rights Reserved.</p>
  </footer>
</saction>