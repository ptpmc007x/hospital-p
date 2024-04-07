<?php
session_start();
// ตรวจสอบข้อมูลผู้ใช้และรับรองตัวตน
$username = $_POST['username'];
$password = $_POST['password'];

// ตรวจสอบในฐานข้อมูลหรือระบบที่เก็บข้อมูลของคุณ
// ตรวจสอบว่าผู้ใช้มีอยู่ในฐานข้อมูลหรือไม่

if ($username === 'admin' && $password === 'password') {
    // รับรองตัวตนสำเร็จ
    $_SESSION['loggedin'] = true;
    header('Location: dashboard.php');
    exit;
} else {
    // รับรองตัวตนไม่สำเร็จ
    echo 'Invalid username or password';
}
?>