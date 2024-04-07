<?php
session_start();
// ยกเลิกเซสชันและออกจากระบบ
session_destroy();
header('Location: login.php');
exit;
