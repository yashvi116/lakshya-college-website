<?php include 'header.php'; ?>

    <section>
        <!-- <header>
    <h1>Lakshya Engineering College</h1>
    <p>Your Future Starts Here</p>
  </header> -->

  <section class="campus-section">
  <video src="video-output-D957BD1F-C2EA-4294-B898-03F2936E080E-1.MOV" controls autoplay muted loop style="width: 400px; border-radius: 12px; margin: 20px 0;"></video>
  <div class="campus-info">
    <h2>About Our College</h2>
      <p>
        Lakshya College is one of the top engineering colleges in India,
        located in the heart of Bangalore. Our sprawling green campus, world-class infrastructure,
        dedicated faculty, and modern research labs make us a preferred choice for students
        nationwide.
      </p>
      <ul style="list-style-type: disc;">
        <li> 100+ Classrooms with Smart Boards</li>
        <li> Modern Science & Computer Labs</li>
        <li> Library with 50,000+ Books</li>
        <li> Sports Ground & Gym</li>
        <li> 90%+ Placement Record</li>
      </ul>
    </div>
  </section>
    <div class="container">
    <div class="image-column">
  <img src="img/cmp-1.jfif" alt="Footer Image" class="Image 1"/>
  <img src="img/cmp-2.jfif" alt="Footer Image" class="Image 2"/>
  <img src="img/cmp-3.jfif" alt="Footer Image" class="Image 3"/>

    </div>
</div>
<div class="container1">
    <div class="image-column1">
  
   <img src="img/cmp-4.jfif" alt="Footer Image" class="Image 4"/> 
   <img src="img/cmp-5.jfif" alt="Footer Image" class="Image 5"/> 
   <img src="img/cmp-6.jfif" alt="Footer Image" class="Image 6"/> 

    </div>
</div>



  <footer>
    <p>&copy; 2025 Lakshya College . All rights reserved.</p>
  </footer>

    </section>
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Segoe UI", sans-serif;
}

body {
  background-color: #f4f8fc;
  color: #333;
}

header {
  background-color: #003366;
  color: white;
  padding: 30px 0;
  text-align: center;
}

header h1 {
  font-size: 36px;
  margin-bottom: 10px;
}

header p {
  font-size: 18px;
}

.campus-section {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: flex-start;
  padding: 40px 20px;
  gap: 40px;
}


.campus-info {
  max-width: 500px;
}

.campus-info h2 {
  font-size: 28px;
  color: #003366;
  margin-bottom: 10px;
}

.campus-info p {
  font-size: 16px;
  line-height: 1.6;
  margin-bottom: 15px;
}

.campus-info ul {
  list-style: none;
  padding-left: 0;
}

.campus-info li {
  padding: 5px 0;
  font-size: 16px;
}

footer {
  background-color: #003366;
  color: white;
  text-align: center;
  padding: 15px 0;
  margin-top: 40px;
}
.image-column img,
.image-column1 img {
  width: 180px;
  height: 120px;
  object-fit: cover;
  border-radius: 10px;
  margin: 10px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.12);
  transition: transform 0.2s;
}

.image-column img:hover,
.image-column1 img:hover {
  transform: scale(1.05);
}

.container,
.container1 {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 20px;
}

.image-column,
.image-column1 {
  display: flex;
  gap: 16px;
}


       </style>
