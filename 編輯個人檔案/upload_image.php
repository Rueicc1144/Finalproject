<?php
// upload_image.php
session_start();
include 'db_connection.php'; // 包含資料庫連接文件

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $uploadDir = '../userImg/'; // 上傳文件夾
        $uploadFile = $uploadDir . basename($_FILES['file']['name']);

        // 檢查上傳文件夾是否存在，若不存在則創建
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // 移動上傳文件到指定位置
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
            // 成功上傳圖片，將路徑存入數據庫
            $conn = openConnection();
            $uEmail = "dazhuang@gmail.com"; // 假設用戶的email是唯一識別
            $sql = "UPDATE users SET uPhoto = ? WHERE uEmail = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $uploadFile, $uEmail);
            if ($stmt->execute()) {
                // 更新成功後，將圖片路徑存儲到Session中
                $_SESSION['profile_image'] = $uploadFile;
                echo "圖片已成功上傳並更新";
            } else {
                echo "更新數據庫失敗: " . $stmt->error;
            }
            $stmt->close();
            closeConnection($conn);
        } else {
            echo "圖片上傳失敗";
        }
    } else {
        echo "文件上傳錯誤: " . $_FILES['file']['error'];
    }
} else {
    echo "無效的請求方法";
}


