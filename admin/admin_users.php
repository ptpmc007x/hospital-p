<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Users</title>
    <!-- เพิ่ม CSS หรือสไตล์เพื่อปรับแต่งหน้าเว็บตามต้องการ -->
</head>

<body>
    <header>
        <h1>Admin - Manage Users</h1>
        <nav>
            <ul>
                <li><a href="admin.php">Dashboard</a></li>
                <li><a href="admin_users.php">Manage Users</a></li>
                <li><a href="admin_posts.php">Manage Posts</a></li>
                <!-- เพิ่มเมนูอื่น ๆ ตามต้องการ -->
            </ul>
        </nav>
    </header>

    <main>
        <!-- แสดงรายการผู้ใช้ทั้งหมด โดยใช้ PHP เรียกข้อมูลจากฐานข้อมูล -->
        <section>
            <h2>User List</h2>
            <ul>
                <?php
                // เชื่อมต่อฐานข้อมูล
                $conn = mysqli_connect("localhost", "username", "password", "database");

                // เลือกข้อมูลจากตาราง users
                $query = "SELECT * FROM users";
                $result = mysqli_query($conn, $query);

                // วนลูปและแสดงรายการผู้ใช้
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li>" . $row['username'] . " - " . $row['email'] . "</li>";
                }

                // ปิดการเชื่อมต่อฐานข้อมูล
                mysqli_close($conn);
                ?>
            </ul>
        </section>
    </main>

    <footer>
        <!-- เพิ่ม footer หรือข้อมูลอื่น ๆ ตามต้องการ -->
    </footer>
</body>

</html>