<?php
include 'config.php'; // database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if user exists (by email or fullname)
    $sql = "SELECT * FROM admissions WHERE email='$username' OR fullname='$username' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verify hashed password
        if (password_verify($password, $user['password'])) {
            // Start session for login
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['fullname'] = $user['fullname'];

            echo "<script>
                alert('Login successful! Welcome, {$user['fullname']}');
                window.location.href='user_details.php'; // redirect to homepage
            </script>";
        } else {
            echo "<script>
                alert('Invalid Password!');
                window.location.href='login.php';
            </script>";
        }
    } else {
        echo "<script>
            alert('No record found! Please complete admission first.');
            window.location.href='admission.php';
        </script>";
    }

    mysqli_close($conn);
} else {
    echo "Invalid request.";
}
?>
