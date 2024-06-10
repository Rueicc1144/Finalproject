<?php
session_start();
include 'db_connection.php'; // 包含資料庫連接文件

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $newUname = htmlspecialchars($_POST['newUname']);

    $uEmail = "dazhuang@gmail.com";

    // 確認uEmail和newUname非空
    if (!empty($uEmail) && !empty($newUname)) {
        // 開啟資料庫連接
        $conn = openConnection();

        // 更新users表中的uName欄位
        $sql = "UPDATE users SET uName = ? WHERE uEmail = ?";
        $stmt = $conn->prepare($sql);

        // 檢查語句準備是否成功
        if ($stmt === false) {
            die("語句準備失敗: " . $conn->error);
        }

        // 綁定參數
        $stmt->bind_param("ss", $newUname, $uEmail);

        // 執行語句
        if ($stmt->execute()) {
            // 更新 session 中的用戶名
            $_SESSION['Name'] = $newUname;
            echo "更新成功";
        } else {
            echo "更新失敗: " . $stmt->error;
        }

        // 關閉語句和連接
        $stmt->close();
        closeConnection($conn);
    } else {
        echo "無效的輸入";
    }
}
