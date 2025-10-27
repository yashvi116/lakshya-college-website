<?php
session_start();
include 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM admissions WHERE id='$user_id'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 0;
        }
        .dashboard {
            max-width: 700px;
            background: white;
            margin: 60px auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }
        h2 {
            color: #3b4cca;
            text-align: center;
        }
        .info {
            margin-top: 20px;
        }
        .info p {
            background: #f8fafc;
            padding: 10px;
            border-radius: 8px;
            margin: 6px 0;
        }
        .logout {
            text-align: center;
            margin-top: 25px;
        }
        .logout a {
            background: #ef4444;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 8px;
        }
        .logout a:hover {
            background: #b91c1c;
        }
    </style>
</head>
<body>

<div class="dashboard">
    <h2>Welcome, <?php echo htmlspecialchars($user['fullname']); ?> 🎓</h2>
    <div class="info">
        <p><b>Full Name:</b> <?php echo $user['fullname']; ?></p>
        <p><b>Date of Birth:</b> <?php echo $user['dob']; ?></p>
        <p><b>Email:</b> <?php echo $user['email']; ?></p>
        <p><b>Phone:</b> <?php echo $user['phone']; ?></p>
        <p><b>Gender:</b> <?php echo $user['gender']; ?></p>
        <p><b>Courses:</b> <?php echo $user['courses']; ?></p>
        <p><b>Address:</b> <?php echo $user['address']; ?></p>
    </div>
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
</div>

</body>
</html>
