
<?php
$host = "localhost";
$user = "root";        // તમારા MySQL નો user
$pass = "";            // પાસવર્ડ (XAMPP માં default ખાલી રહે છે)
$dbname = "lakshya";   // તમારું ડેટાબેઝ નામ

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
