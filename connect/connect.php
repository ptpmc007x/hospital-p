<?php
// เชื่อมต่อกับฐานข้อมูล MySQL
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// สร้างคำสั่ง SQL เพื่อดึงข้อมูล
$sql = "SELECT * FROM events";
$result = $conn->query($sql);

// เริ่มตารางปฏิทิน
echo "<table border='1'>";
echo "<tr><th>วัน</th><th>กิจกรรม</th></tr>";

if ($result->num_rows > 0) {
    // แสดงข้อมูลในตารางปฏิทิน
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["date"]."</td><td>".$row["event"]."</td></tr>";
    }
} else {
    echo "<tr><td colspan='2'>ไม่มีกิจกรรม</td></tr>";
}

// เสร็จสิ้นตาราง
echo "</table>";

// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>
