<?php
include 'config.php'; // DB connection include કરો

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formમાંથી values લો
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // Basic Validation
    if ($name == "" || $email == "" || $subject == "" || $message == "") {
        echo "<h3 style='color:red;'>All fields are required!</h3>";
        echo "<a href='contact.php'>Go Back</a>";
        exit;
    }

    // Prepared Statement to prevent SQL Injection
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        echo "<h2 style='color:green;'>✅ Your message has been sent successfully!</h2>";
        echo "<a href='conact.php'>Go Back</a>";
    } else {
        echo "<h3 style='color:red;'>❌ Error saving your message. Please try again.</h3>";
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: contact.php"); // Direct access prevent
    exit;
}
?>
