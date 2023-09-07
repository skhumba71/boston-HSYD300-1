<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // database connection details
    $servername = "localhost";
    $db_username = "root";
    $db_password = "mysql";
    $dbname = "database_name";
    
    // Create a database connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Check user credentials
    $sql = "SELECT id FROM admins WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        // Authentication successful
        $_SESSION["username"] = $username;
        header("Location: index.php"); // Redirect to dashboard or another authenticated page
    } else {
        // Authentication failed
        echo "Invalid credentials. Please try again.";
    }
    
    $conn->close();
}
?>
