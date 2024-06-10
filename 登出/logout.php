<?php
session_start();
session_destroy(); // 銷毀所有的會話數據
header("Location: ../搜尋功能/search.php"); // 重定向到指定頁面
exit();
