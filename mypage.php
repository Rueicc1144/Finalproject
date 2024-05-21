<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <?php
    require ("css.inc");
    ?>
    <title>Mypage</title>
</head>
<body>
    <div class="frame">
        <div class="sidebar">
            <div class="top">
                <div class="logo">
                    <a href="login.php">
                        logo
                    </a>
                    <span>超商美食+</span>
                </div>
                <i class="menu" id="btn">≡</i>
            </div>
            <div class="user">
                <?php
                if(isset($_SESSION["check"])){
                    if($_SESSION["check"] == "Yes"){
                    //已登入部分顯示
                        echo '
                        <a href="index.php">
                            <img src="assets/chihuahua.gif" alt="userimg" class="user-img">
                        </a>
                        <div>
                        ';
                        $acc = $_COOKIE["Acc"];
                        echo '<p>晚安: ' . $acc . '</p>';
                        echo '<p>身分:管理員##</p>' ;
                        echo '<p>已登入</p>';
                        echo '</div>';


                ?>


            </div>
            
            <ul>
                <li>
                    <a href="favfoods">
                        我的最愛美食
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        看美食評價
                    </a>
                </li>
                <li>
                    <a href="mypage.php">
                        我的主頁
                    </a>
                </li>   
                <li>
                    <a href="logout.php">
                        登出
                    </a>
                </li>
            </ul>

                <?php
                }else{
                    //未登入部分顯示
                        echo '  
                        <a href="login.php">
                            <img src="assets/nonlogin.png" alt="userimg" class="user-img">
                        </a>
                        <div>
                            <p>未知的使用者</p>
                            <p>未登入</p>
                            <a href="login.php">登入</a>
                            /
                            <a href="logout.php">註冊</a>
                        </div>
                        ';
                        }
                    }
                ?>
        </div>
                
                

        <div class="main-content">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                <div class="title">個人資料</div>
                    <div class="col-8 content">
                        <div class="content-title">
                            帳號<br>
                            信箱<br>
                            密碼<br>
                            ....
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>