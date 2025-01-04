<?php
// Database connection settings
$servername = "localhost";
$username = "root"; // default username for XAMPP MySQL
$password = ""; // default password for XAMPP MySQL
$dbname = "inventory"; // replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form input values
    $userName = $_POST['username']; // Email as the username
    $password = $_POST['password'];
    $role = $_POST['role']; // Role (Type in the database)

    // Query to check if the user exists with matching username, password, and role (Type)
    $sql = "SELECT * FROM users WHERE  Username= ? AND Passwords = ? AND Type = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $userName, $password, $role);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User is authenticated, redirect based on role
        $user = $result->fetch_assoc();
        if ($role == 'admin') {
            header("Location: admin_dashboard.html");
        } elseif ($role == 'manager') {
            header("Location: lumen/Manager Dashboard/manager.html");
        } else {
            header("Location: lumen/Staff Dashboard/staff.html");
        }
    } else {
        // Invalid credentials
        echo "<script>alert('Invalid Username, Password, or Role');</script>";
    }

    $stmt->close();
}

$conn->close();
?>
