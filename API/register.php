<?php
include('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = "User"; // Default role for new users

    // Insert new user into the database
    $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful. Admin approval required.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
