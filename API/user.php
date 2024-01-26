<?php
include('db_config.php');
session_start();

// Fetch and display user's own profile details (Assuming user ID is stored in $_SESSION['user_id'])
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = $user_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>

    <h2>Welcome, <?php echo $row['username']; ?>!</h2>

    <!-- Display user's own profile details -->

</body>
</html>
