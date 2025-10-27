<?php
include 'header.php';
?>
    <section>
  <header>
    <h1>Contact Us</h1>
    <p>We'd love to hear from you! Reach out with any questions or feedback.</p>
  </header>

  <main class="contact-container">
    <form class="contact-form" action="submit_contact.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required />

      <label for="subject">Subject:</label>
      <input type="text" id="subject" name="subject" required />

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="5" required></textarea>

      <button type="submit">Send Message</button>
    </form>

    <div class="contact-info">
      <h2>Our Contact Information</h2>
      <p><strong>Address:</strong> 123 College Ave, Bangalore, India</p>
      <p><strong>Phone:</strong> +91 98765 43210</p>
      <p><strong>Email:</strong> lakshya163@ac.in</p>
</section>
<style>
    body {
        background: #f5f7fa;
        font-family: 'Segoe UI', Arial, sans-serif;
        color: #222;
    }

    section {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(44, 62, 80, 0.08);
        margin: 40px auto;
        max-width: 700px;
        padding: 32px;
    }

    header h1 {
        color: #003366;
        margin-bottom: 8px;
    }

    header p {
        color: #555;
        margin-bottom: 24px;
    }

    .contact-container {
        display: flex;
        gap: 32px;
        flex-wrap: wrap;
    }

    .contact-form {
        flex: 1 1 300px;
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .contact-form label {
        color: #003366;
        font-weight: 500;
    }

    .contact-form input,
    .contact-form textarea {
        border: 1px solid #b0c4de;
        border-radius: 4px;
        padding: 10px;
        font-size: 1rem;
        background: #f0f4ff;
        color: #222;
        transition: border-color 0.2s;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
        border-color: #003366;
        outline: none;
    }

    .contact-form button {
        background: #003366;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 12px;
        font-size: 1rem;
        cursor: pointer;
        font-weight: 600;
        
    }

    .contact-form button:hover {
        background: #1b5fa7;
    }

    .contact-info {
        flex: 1 1 200px;
        background: #eaf6ff;
        border-radius: 8px;
        padding: 20px;
        color: #222;
    }

    .contact-info h2 {
        color: #003366;
        margin-bottom: 12px;
    }

    .contact-info p {
        margin: 8px 0;
        color: #444;
    }
    </style>
