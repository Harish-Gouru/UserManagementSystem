<?php
include('db_config.php');
session_start();

if (isset($_SESSION['role'])) {
    $role = $_SESSION['role'];

    switch ($role) {
        case 'Super Admin':
            include('super_admin_dashboard.php');
            break;
        case 'Admin':
            include('admin_dashboard.php');
            break;
        case 'User':
            include('user_dashboard.php');
            break;
        default:
            // Handle other roles or unauthorized access
            break;
    }
} else {
    header("Location: login.html");
    exit();
}
?>
