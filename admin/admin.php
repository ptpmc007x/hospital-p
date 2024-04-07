<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- สามารถเพิ่ม CSS ไฟล์เพื่อสไตล์หน้า Admin ตามต้องการได้ -->
    <!-- เช่น <link rel="stylesheet" href="admin-style.css"> -->
</head>

<body>
    <header>
        <h1>Admin Dashboard</h1>
        <!-- เพิ่มเมนูหรือปุ่มนำทางไปยังหน้าต่าง ๆ ของ Admin ตามต้องการ -->
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
        <!-- ใส่เนื้อหาหน้า Admin ที่ต้องการแสดง โดยใช้ PHP เพื่อเรียกข้อมูลจากฐานข้อมูล -->
        <section>
            <!-- ตัวอย่างการแสดงข้อมูลผู้ใช้ -->
            <h2>User List</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <!-- เพิ่มคอลัมน์อื่น ๆ ตามต้องการ -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // เชื่อมต่อฐานข้อมูล
                    $conn = mysqli_connect("localhost", "username", "password", "database");

                    // เลือกข้อมูลจากตาราง users
                    $query = "SELECT * FROM users";
                    $result = mysqli_query($conn, $query);

                    // วนลูปและแสดงข้อมูลผู้ใช้
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        // เพิ่มคอลัมน์อื่น ๆ ตามต้องการ
                        echo "</tr>";
                    }

                    // ปิดการเชื่อมต่อฐานข้อมูล
                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <!-- เพิ่ม footer หรือข้อมูลอื่น ๆ ตามต้องการ -->
    </footer>
</body>

</html>