<?php
include('databaseconfig.php');

// Super Admin has full access (Add, Edit, Delete users)
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin Dashboard</title>
</head>
<body>

    <h2>Super Admin Dashboard</h2>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Display user data with options for Add, Edit, and Delete
            echo "<p>{$row['username']} - {$row['role']} - {$row['registration_status']}</p>";
        }
    } else {
        echo "No users found.";
    }
    ?>

</body>
</html>
