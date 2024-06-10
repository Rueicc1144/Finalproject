<?php
// 資料庫連接參數
$servername = "localhost";
$username = "root";
$password = "1144opdbb8";
$dbname = "finalproject";

// 開啟資料庫連接
function openConnection() {
    global $servername, $username, $password, $dbname;

    // 建立連接
    $conn = new mysqli($servername, $username, $password, $dbname);

    // 檢查連接
    if ($conn->connect_error) {
        die("連接失敗: " . $conn->connect_error);
    }

    return $conn;
}

// 關閉資料庫連接
function closeConnection($conn) {
    $conn->close();
}

