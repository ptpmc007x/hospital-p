<?php
session_start();
// ตรวจสอบการเข้าสู่ระบบ
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h2>Welcome to the Dashboard</h2>
    <p>This is the admin dashboard.</p>
    <a href="logout.php">Logout</a>
</body>

</html>