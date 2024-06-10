<?php
session_start();
include 'db_connection.php'; // 包含資料庫連接文件

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uEmail = $_SESSION['email'];
    $foodName = "烤蔬菜番茄筆尖麵";
    $reviewTime = date('Y-m-d H:i:s');
    $reviewText = htmlspecialchars($_POST['textcomment']);
    $satietyReview = intval($_POST['satietyReview']/10);
    $preferReview = intval($_POST['preferReview']/10);
    $priceReview = intval($_POST['priceReview']/10);
    $likeCount = 1;
    $dislike = 1;

    // 開啟資料庫連接
    $conn = openConnection();

    // 插入 review 表
    $sql = "INSERT INTO review (uEmail, foodName, reviewTime, reviewText, satietyReview, preferReview, priceReview, likeCount, dislike) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("語句準備失敗: " . $conn->error);
    }

    $stmt->bind_param("ssssiiiii", $uEmail, $foodName, $reviewTime, $reviewText, $satietyReview, $preferReview, $priceReview, $likeCount, $dislike);

    if ($stmt->execute()) {
        echo "評論新增成功";
    } else {
        echo "評論新增失敗: " . $stmt->error;
    }

    // 處理圖片上傳
    $uploadDir = '../foodimgs/';
    $allowedTypes = array(IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_GIF);

    // 檢查上傳文件夾是否存在，若不存在則創建
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    foreach ($_FILES as $fileKey => $file) {
        if ($file['error'] == UPLOAD_ERR_OK) {
            $fileType = exif_imagetype($file['tmp_name']);
            if (in_array($fileType, $allowedTypes)) {
                $filePath = $uploadDir . basename($file['name']);
                if (move_uploaded_file($file['tmp_name'], $filePath)) {
                    // 插入 review_photos 表
                    $sqlPhoto = "INSERT INTO review_photos (uEmail, foodName, reviewTime, photoPath) 
                                 VALUES (?, ?, ?, ?)";
                    $stmtPhoto = $conn->prepare($sqlPhoto);

                    if ($stmtPhoto === false) {
                        die("語句準備失敗: " . $conn->error);
                    }

                    $stmtPhoto->bind_param("ssss", $uEmail, $foodName, $reviewTime, $filePath);

                    if ($stmtPhoto->execute()) {
                        echo "圖片新增成功";
                    } else {
                        echo "圖片新增失敗: " . $stmtPhoto->error;
                    }

                    $stmtPhoto->close();
                } else {
                    echo "圖片上傳失敗";
                }
            } else {
                echo "無效的圖片格式";
            }
        } else {
            echo "圖片上傳錯誤: " . $file['error'];
        }
    }

    // 關閉連接
    $stmt->close();
    closeConnection($conn);
} else {
    echo "無效的請求方法";
}
?>
