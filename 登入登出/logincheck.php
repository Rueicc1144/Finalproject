<?php
session_start();
include 'db_connection.php'; // 包含資料庫連接文件
$link = openConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Sanitize inputs
    $email = mysqli_real_escape_string($link, $email);
    $password = mysqli_real_escape_string($link, $password);

    // Query to check the email and password
    $query = "SELECT * FROM users WHERE uEmail='$email' AND uPass='$password'";
    $result = mysqli_query($link, $query);
    $row= mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        $uName = $row['uName'];
        $uImage = $row['uPhoto'];
        $_SESSION['check']="Yes";
        $_SESSION['Name'] = $uName;
        $_SESSION['profile_image'] = $uImage;
        echo "<script>alert('登入成功!'); window.location.href='../搜尋功能/search.php';</script>";
    } else {
        $_SESSION['check']="No";
        setcookie("Name","錯誤",$date);
        echo "<script>alert('電子郵件或密碼錯誤，請重試!'); window.location.href='login.html';</script>";
    }
}

mysqli_close($link);
