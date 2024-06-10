<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>美食_Page</title>
    <link rel="stylesheet" href="Navigation bar.css">
    <link rel="stylesheet" href="Food Info Obj.css">
    <link rel="stylesheet" href="Review Comment Obj2.css">

</head>
<style>
.comment-divider {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    margin: 50px 0; /* 加上適當的間距 */
}

.comment-divider span {
    font-size: 64px;
    border: 0;
    margin: 0;
}

.comment-divider hr {
    width: 1200px;
    border: 0;
    border-top: 1px solid #352f36;
    margin: 24px auto;
}

</style>
<body>
<!-- 導覽列 -->
    <nav class="navBar">
        <div class="bergerMenu-placeholder">
            <img class="bergerMenu" src="./NavBar_image/menu.png">
            <div class="sidebar-placeholder">
            <?php

            if(!isset($_SESSION["check"])){
                $_SESSION["check"] = "No";
                $_SESSION["Name"] = " ";
            }
            $uId = $_SESSION['Name'];
            if($_SESSION["check"] == "Yes"){
                    //以登入部分顯示
            ?>
                <div class="sidebar">
                    <div class="header">個人設定</div>
                    <div class="profile">
                        <img class="profile-icon" src="<?php echo isset($_SESSION['profile_image']) ? $_SESSION['profile_image'] : './SB_image/userPhoto.jpg'; ?>" alt="User Icon" />
                        <div class="user-id"><?php echo $uId;?></div>
                    </div>
                    <div class="menu">
                        <?php
                        if($_SESSION["access"] == "admin"){
                        ?>
                        <div class="menu-item">  
                            <img class="icon" src="./SB_image/analysis.png" alt="Edit Profile Icon" />
                            <div class="menu-text">
                                <a href="../分析頁面/analysis.php">
                                    查看分析報告
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="menu-item">  
                            <img class="icon" src="./SB_image/settings.png" alt="Edit Profile Icon" />
                            <div class="menu-text">
                                <a href="../編輯個人檔案/edit_profile.php">
                                    編輯個人檔案
                                </a>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img class="icon" src="./SB_image/bookmark.png" alt="Favorites Icon" />
                            <div class="menu-text">
                                <a href="../我的蒐藏/collections.php">
                                    我的收藏
                                </a>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img class="icon" src="./SB_image/bell.png" alt="Notifications Icon" />
                            <div class="menu-text">
                                <a href="../通知/notification.php">
                                    通知 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }else{
                //未登入部份顯示 
            ?>
                <div class="sidebar">
                    <div class="header">個人設定</div>
                    <div class="profile">
                        <div class="profile">
                            <img class="profile-icon" src="./SB_image/userPhoto.jpg" alt="User Icon" />
                            <div class="user-id">User_ID</div>
                        </div>
                        <div class="user-id">
                            <a href="../登入登出/login.php">您還未登入！</a>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="menu-item">
                            <img class="icon" src="./SB_image/settings.png" alt="Edit Profile Icon" />
                            <div class="menu-text">編輯個人檔案</div>
                        </div>
                        <div class="menu-item">
                            <img class="icon" src="./SB_image/bookmark.png" alt="Favorites Icon" />
                            <div class="menu-text">我的收藏</div>
                        </div>
                        <div class="menu-item">
                            <img class="icon" src="./SB_image/bell.png" alt="Notifications Icon" />
                            <div class="menu-text">通知</div>
                        </div>
                    </div>
                </div>
            <?php
            }
            
            ?>
                
            </div>
        </div>

        <div class="logo-placeholder">
            <a href="../搜尋功能/search.php">
                <img class="logo" src="./NavBar_image/logo.png">
            </a>
        </div>

        <?php
        if(!isset($_SESSION["check"])){
            $_SESSION["check"] = "No";
        }
            
        if($_SESSION["check"] == "Yes"){
               //以登入部分顯示
        
        ?>
        <div class="User-placeholder">
            <div class="hello-text">
                <div><?php echo $uId . " "; ?>您好</div>
            </div>
            <div class="photo-placeholder">
                <img class="user-photo" src="<?php echo isset($_SESSION['profile_image']) ? $_SESSION['profile_image'] : './SB_image/userPhoto.jpg'; ?>">
                <div class="hover-windows-placeholder">
                    <div class="hover-windows">
                        <div class="windows-placeholder">
                            <div class="setting">
                                <img class="setting-icon" src="./NavBar_Logged_image/setting.svg" />
                                <div class="setting-text"><a href="../編輯個人檔案/edit_profile.php">個人設定</a></div>
                            </div>
                            <div class="windows-line"></div>
                            <div class="log-out">
                                <img class="log-out-icon" src="./NavBar_Logged_image/log-out.svg" />
                                <div class="log-out-text"><a href="../登出/logout.php">登出</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }else{
                //未登入部份顯示 

        ?>
        <div class="button-placeholder">
            <a class="logIn-btn" href="../登入登出/login.php">登入</a>
            <a class="signUp-btn" href="../登入登出/register.php">註冊</a>
        </div>
        <?php
        }
        ?>
    </nav>

<!-- 美食資訊物件 -->
    <div class="FIO">
        <?php
        function createFoodItem($imageSrc1, $imageSrc2, $foodName, $price, $originalPrice, $logoSrc, $satietyScore, $preferScore, $priceScore) {
            return "
            <div class='FIO_Container'>
                <div class='food-image-box'>
                    <div class='food-image'>
                        <img src='{$imageSrc1}' alt='Food image'>
                    </div>
                    <div class='food-image'>
                        <img src='{$imageSrc2}' alt='Food image'>
                    </div>
                </div>
                <div class='info-interface'>
                    <div class='food-name'>{$foodName}</div>
                    <div class='price'>
                        <span>$</span><span>{$price}</span>
                        <span class='original-price'>\${$originalPrice}</span>
                    </div>
                    <div class='source-info'>
                        <div>來自</div>
                        <div class='logo-container'>
                            <img class='food-logo' src='{$logoSrc}' alt='Food Logo'>
                        </div>
                        <div class='source-line'></div>
                        <img src='./FIO_image/collection.png' alt='圖標'>
                        <img src='./FIO_image/source.png' alt='連結圖標'>
                    </div>
                    <div class='review-container'>
                        <div class='review-item'>
                            <img src='./FIO_image/SatietyrReview.svg' alt='review 1'>
                            <div class='review-line'></div>
                            <div class='review-score'>{$satietyScore}</div>
                        </div>
                        <div class='review-item'>
                            <img src='./FIO_image/PreferReview.svg' alt='review 2'>
                            <div class='review-line'></div>
                            <div class='review-score'>{$preferScore}</div>
                        </div>
                        <div class='review-item'>
                            <img src='./FIO_image/PriceRevier.svg' alt='review 3'>
                            <div class='review-line'></div>
                            <div class='review-score'>{$priceScore}</div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }

        

        // 假設從資料庫中取得的資料
        $foodItems = [
            [
                './FIO_image/日式豬排佐咖喱歐姆蛋燴飯.jpg',
                './FIO_image/日式豬排佐咖喱歐姆蛋燴飯02.jpeg',
                '日式豬排佐咖喱歐姆蛋燴飯',
                70,
                100,
                './FIO_image/FM_Logo.png',
                9.6,
                7.6,
                6.8
            ]
            // 可以加入更多的項目
        ];
        ?>
        <div class="food-list">
            <?php
            foreach ($foodItems as $food) {
                echo createFoodItem(...$food);
            }
            ?>
            </div>
        </div>
    </div> 
    
<!-- 評價留言 -->
    <?php
    // 資料庫
    // ！注意！文字超出物件範圍，物件並不會跟著變動，所以先不要設定這麼多文字
    $reviewComments = [
        [
            'userPhoto' => './RCO_Image/userPhoto.jpg',
            'userName' => '使用者名稱',
            'reviewTime' => '2023-05-22T14:48:00',
            'reviewText' => 'Lorem ipsum dolor sit amet, consectetur ',
            'satietyScore' => '8.6',
            'preferenceScore' => '9.7',
            'priceScore' => '9.4',
            'likeCount' => '69',
            'dislikeCount' => '87',
            'uploadedPhotos' => ['./RCO_Image/uploadedPhoto1.jpg', './RCO_Image/uploadedPhoto2.jpg']
        ],
        [
            'userPhoto' => './RCO_Image/userPhoto.jpg',
            'userName' => '使用者名稱',
            'reviewTime' => '2023-05-22T14:48:00',
            'reviewText' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula.',
            'satietyScore' => '8.6',
            'preferenceScore' => '9.7',
            'priceScore' => '9.4',
            'likeCount' => '69',
            'dislikeCount' => '87',
            'uploadedPhotos' => ['./RCO_Image/uploadedPhoto1.jpg', './RCO_Image/uploadedPhoto2.jpg']
        ],
        [
            'userPhoto' => './RCO_Image/userPhoto.jpg',
            'userName' => '使用者名稱',
            'reviewTime' => '2023-05-22T14:48:00',
            'reviewText' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula.',
            'satietyScore' => '8.6',
            'preferenceScore' => '9.7',
            'priceScore' => '9.4',
            'likeCount' => '69',
            'dislikeCount' => '87',
            'uploadedPhotos' => ['./RCO_Image/uploadedPhoto1.jpg']
        ],
        // 更多評論資料
    ];

    // 時間計算函數
    function timeAgo($datetime) {
        $now = new DateTime();
        $interval = $now->diff(new DateTime($datetime));
        if ($interval->y > 0) {
            return $interval->y . '年以前';
        } elseif ($interval->m > 0) {
            return $interval->m . '個月以前';
        } elseif ($interval->d > 0) {
            return $interval->d . '天以前';
        } elseif ($interval->h > 0) {
            return $interval->h . '小時以前';
        } else {
            return $interval->i . '分鐘以前';
        }
    }
    ?>

    <div class="comment-divider">
        <span>評價</span>
        <hr>
    </div>
    <div class="center">
        <div id="uComment-container">
            <?php foreach ($reviewComments as $comment): ?>
                <div class="userComment-container">
                    <!-- 留言 -->
                    <div class="comment-content">
                        <div class="user-info">
                            <div class="user-placeholder">
                                <img class="user-photo" src="<?= $comment['userPhoto'] ?>" alt="User Photo" />
                            </div>
                            <div class="user-details">
                                <div class="username"><?= $comment['userName'] ?></div>
                                <div class="time-info">
                                    <img class="clock-icon" src="./RCO_Image/clock.svg" alt="Clock Icon" />
                                    <span><?= timeAgo($comment['reviewTime']) ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="comment-text">
                            <?= $comment['reviewText'] ?>
                        </div>
                        <div class="comment-info">
                            <div class="comment-container">
                                <div class="comment-item">
                                    <img class="comment-icon" src="./RCO_image/SatietyrReview.png" alt="Satiety Review Icon">
                                    <div class="comment-line"></div>
                                    <div class="comment-score"><?= $comment['satietyScore'] ?></div>
                                </div>
                                <div class="comment-item">
                                    <img class="comment-icon" src="./RCO_image/PreferReview.png" alt="Preference Review Icon">
                                    <div class="comment-line"></div>
                                    <div class="comment-score"><?= $comment['preferenceScore'] ?></div>
                                </div>
                                <div class="comment-item">
                                    <img class="comment-icon" src="./RCO_image/PriceReview.png" alt="Price Review Icon">
                                    <div class="comment-line"></div>
                                    <div class="comment-score"><?= $comment['priceScore'] ?></div>
                                </div>
                            </div>
                            <div class="likes-container">
                                <div class="likes-dislikes">
                                    <div class="like-item">
                                        <img class="like-icon" src="./RCO_image/upvote.svg" alt="Like Icon" />
                                        <div class="comment-line"></div>
                                        <div class="comment-score"><?= $comment['likeCount'] ?></div>
                                    </div>
                                    <div class="dislike-item">
                                        <img class="dislike-icon" src="./RCO_image/downvote.svg" alt="Dislike Icon" />
                                        <div class="comment-line"></div>
                                        <div class="comment-score"><?= $comment['dislikeCount'] ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 留言圖片 -->
                    <div class="comment-image">
                        <div class="overlay">
                            <img src="<?= $comment['uploadedPhotos'][1] ?>" alt="Uploaded Photo" style="width: 100%; height: 100%;">
                        </div>
                        <div class="image-placeholder">
                            <img src="<?= $comment['uploadedPhotos'][0] ?>" alt="Uploaded Photo" style="width: 100%; height: 100%;" onclick="openModal(0, <?= json_encode($comment['uploadedPhotos']) ?>)">
                        </div>
                        <div class="image-count">
                            <img class="icon" src="./RCO_image/image.svg" alt="Image Icon" />
                            <span><?= count($comment['uploadedPhotos']) ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
                <!-- 圖片瀏覽器 -->
        </div>
    </div>
    
    
    <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
        <div id="caption"></div>
        <div class="navigation">
            <button id="prev" class="nav-button">◀</button>
            <button id="next" class="nav-button">▶</button>
        </div>
    </div>
   

    <script src="Review Comment Obj.js"></script>
</body>
</html>
