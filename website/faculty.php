<?php
include 'header.php';
?>

<section>

  <header>
    <h1> Meet Our Faculty</h1>
    <p>Our experienced faculty members are the backbone of quality education.</p>
  </header>

  <main class="faculty-container">

    <div class="faculty-card">
      <img src="img/fanil.jfif" alt="Prof. Anil Shah" />
      <h2>Prof. Anil Shah</h2>
      <p> Subject: Computer Science</p>
      <p> Experience: 12 Years</p>
      <p class="desc">Expert in Data Structures and C Programming.</p>
    </div>

    <div class="faculty-card">
      <img src="img/fmeena.jfif" alt="Dr. Meena Patel" />
      <h2>Dr. Meena Patel</h2>
      <p> Subject: Artificial Intelligence</p>
      <p> Experience: 9 Years</p>
      <p class="desc">PhD in AI and Machine Learning specialist.</p>
    </div>

    <div class="faculty-card">
      <img src="img/frakes.jfif" alt="Prof. Rakesh Kumar" />
      <h2>Prof. Rakesh Kumar</h2>
      <p> Subject: Mathematics</p>
      <p> Experience: 15 Years</p>
      <p class="desc">Known for simplifying complex calculus and algebra.</p>
    </div>

    <div class="faculty-card">
      <img src="img/fnidhi.jfif" alt="Ms. Nidhi Joshi" />
      <h2>Ms. Nidhi Joshi</h2>
      <p> Subject: Web Development</p>
      <p> Experience: 6 Years</p>
      <p class="desc">Frontend & backend web technologies expert.</p>
    </div>

    <div class="faculty-card">
      <img src="img/frajes.jfif" alt="Mr. Rajesh Thakur" />
      <h2>Mr. Rajesh Thakur</h2>
      <p> Subject: Networking</p>
      <p> Experience: 10 Years</p>
      <p class="desc">Specialist in Network Security and Routing Protocols.</p>
    </div>

    <div class="faculty-card">
      <img src="img/fpriya.jfif" alt="Ms. Priya Verma" />
      <h2>Ms. Priya Verma</h2>
      <p> Subject: Database Management</p>
      <p> Experience: 8 Years</p>
      <p class="desc">Expert in SQL, Oracle, and data modeling.</p>
    </div>

    <div class="faculty-card">
      <img src="img/fkunal.jfif" alt="Dr. Kunal Desai" />
      <h2>Dr. Kunal Desai</h2>
      <p> Subject: Software Engineering</p>
      <p> Experience: 11 Years</p>
      <p class="desc">Focuses on SDLC, Agile, and project management.</p>
    </div>

    <div class="faculty-card">
      <img src="img/frina.jfif" alt="Mrs. Rina Sheth" />
      <h2>Mrs. Rina Sheth</h2>
      <p> Subject: Operating Systems</p>
      <p> Experience: 7 Years</p>
      <p class="desc">Teaches OS concepts, Linux, and process management.</p>
    </div>

    <div class="faculty-card">
      <img src="img/famit.jfif" alt="Prof. Amit Chauhan" />
      <h2>Prof. Amit Chauhan</h2>
      <p>Subject: Cloud Computing</p>
      <p> Experience: 5 Years</p>
      <p class="desc">AWS and Azure certified trainer with cloud architecture expertise.</p>
    </div>

  </main>

  <footer>
    <p>&copy; 2025 Your College Name. All Rights Reserved.</p>
  </footer>

</section>
  <style>
    body {
  margin: 0;
  font-family: 'Segoe UI', sans-serif;
  background: #f0f4f8;
  color: #333;
}

header {
  background-color: #003366;
  color: white;
  padding: 30px 20px;
  text-align: center;
}

.faculty-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 25px;
  padding: 30px;
  max-width: 1200px;
  margin: auto;
}

.faculty-card {
  background: white;
  padding: 20px;
  border-radius: 15px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  text-align: center;
  transition: transform 0.3s;
}

.faculty-card:hover {
  transform: translateY(-5px);
}

.faculty-card img {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 15px;
  border: 3px solid #004080;
}

.faculty-card h2 {
  color: #004080;
  margin: 10px 0;
}

.faculty-card p {
  margin: 5px 0;
}

.desc {
  font-size: 0.9rem;
  color: #555;
}

footer {
  background-color: #003366;
  color: white;
  text-align: center;
  padding: 15px;
  margin-top: 40px;
}

  </style>
