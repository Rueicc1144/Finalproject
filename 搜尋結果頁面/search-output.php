<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>搜尋結果</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Navigation bar3.css">
    <link rel="stylesheet" type="text/css" href="search-output1.css">
    <link rel="stylesheet" type="text/css" href="Food Show Obj1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navBar">
        <div class="bergerMenu-placeholder">
            <img class="bergerMenu" src="./NavBar_image/menu.png">
            <div class="sidebar-placeholder">
            <div class="sidebar">
                    <div class="header">個人設定</div>
                    <div class="profile">
                        <div class="profile">
                            <img class="profile-icon" src="./SB_image/userPhoto.jpg" alt="User Icon" />
                            <div class="user-id">User_ID</div>
                        </div>
                        <div class="user-id">
                            <a href="../登入登出/login.html">您還未登入！</a>
                        </div>
                    </div>
                    <div class="menu">
                        <div class="menu-item">  
                            <img class="icon" src="./SB_image/settings.png" alt="Edit Profile Icon" />
                            <div class="menu-text">
                                <a href="../編輯個人檔案/edit_profile.html">
                                    編輯個人檔案
                                </a>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img class="icon" src="./SB_image/bookmark.png" alt="Favorites Icon" />
                            <div class="menu-text">
                                <a href="../我的蒐藏/collections.html">
                                    我的收藏
                                </a>
                            </div>
                        </div>
                        <div class="menu-item">
                            <img class="icon" src="./SB_image/bell.png" alt="Notifications Icon" />
                            <div class="menu-text">
                                <a href="../通知/notification.html">
                                    通知 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="logo-placeholder">
            <a href="../搜尋功能/search.html">
                <img class="logo" src="./NavBar_image/logo.png">
            </a>
        </div>

        <div class="button-placeholder">
            <a class="logIn-btn" href="../登入登出/login.html">登入</a>
            <a class="signUp-btn" href="../登入登出/register.html">註冊</a>
        </div>
    </nav>

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <!--左邊部分-->
                <div class="left col-3">
                    <div class="btn-group">
                        <button type="button" class="bt collect"><a href="../我的蒐藏/collections.html">
                            <span>
                                <i class="fa-regular fa-bookmark"></i>
                            </span>我的收藏</a>
                        </button>
                        <button type="button" class="bt setting"><a href="../編輯個人檔案/edit_profile.html"><span>
                            <i class="fa-regular fa-user"></i>
                        </span>個人設定</a>
                        </button>
                    </div>
                    
                    <!--分類區-->
                    <div class="select-option"> 
                        <form class="filter-form">
                            <!--依超商-->
                            <div class="base-container">
                                <button class="filter-btn" type="button" data-bs-toggle="collapse" data-bs-target="#cv-store-filter" aria-expanded="false" aria-controls="cv-store-filter">
                                    <span class="arror-right">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </span>
                                    <span class="filter-text">依超商</span>
                                </button>
                                <div class="collapse" id="cv-store-filter">   
                                
                                    <div class="options-container">
                                        <a>
                                            <img class="option-pic" src="FSO_image/FM_Logo.png">
                                        </a>
                                        <label class="form-check-label" for="fm">全家</label>
                                        <input class="form-check-input" type="checkbox" value="fm" id="fm">
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                    </div>
                                    <div class="options-container">
                                        <a>
                                            <img class="option-pic" src="FSO_image/FM_Logo.png" >
                                        </a>
                                        <label class="form-check-label" for="711">7-11</label>
                                        <input class="form-check-input" type="checkbox" value="711" id="711">
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                    </div>
                                    <div class="options-container">
                                        <a>
                                            <img class="option-pic" src="FSO_image/FM_Logo.png">
                                        </a>
                                        <label class="form-check-label" for="life"></label>
                                        <input class="form-check-input" type="checkbox" value="life" id="life">
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                    </div>
                                    <div class="options-container">
                                        <a>
                                            <img class="option-pic" src="FSO_image/FM_Logo.png">
                                        </a>
                                        <label class="form-check-label" for="OKmart">OK超商</label>
                                        <input class="form-check-input" type="checkbox" value="OKmart" id="OKmart">
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                    </div> 
                                </div>
                            </div>

                            <!--依種類-->
                            <div class="base-container">
                                <button class="filter-btn" type="button" data-bs-toggle="collapse" data-bs-target="#cate-filter" aria-expanded="false" aria-controls="cate-filter">
                                    <span class="arror-right">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </span>
                                    <span class="filter-text">依種類</span>
                                </button>
                                <div class="collapse" id="cate-filter">
                                    <div class="options-container">
                                        <a>
                                            <img class="option-pic" src="./foodTypeIcon/mainMeal.png">
                                        </a>
                                        <label class="form-check-label" for="md">主食</label>
                                        <input class="form-check-input" type="checkbox" value="md" id="md">
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                    </div>
                                    <div class="options-container">
                                        <a>
                                            <img class="option-pic" src="./foodTypeIcon/riceball.png" >
                                        </a>
                                        <label class="form-check-label" for="onigiri">飯糰</label>
                                        <input class="form-check-input" type="checkbox" value="onigiri" id="onigiri">
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                    </div>
                                    <div class="options-container">
                                        <a>
                                            <img class="option-pic" src="./foodTypeIcon/sandwich.png">
                                        </a>
                                        <label class="form-check-label" for="sd">三明治</label>
                                        <input class="form-check-input" type="checkbox" value="sd" id="sd">
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                    </div>
                                    <div class="options-container">
                                        <a>
                                            <img class="option-pic" src="./foodTypeIcon/veg.png">
                                        </a>
                                        <label class="form-check-label" for="vt">蔬果</label>
                                        <input class="form-check-input" type="checkbox" value="vt" id="vt">
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                    </div>
                                    <div class="options-container">
                                        <a>
                                            <img class="option-pic" src="./foodTypeIcon/bread.png">
                                        </a>
                                        <label class="form-check-label" for="bd">麵包</label>
                                        <input class="form-check-input" type="checkbox" value="bd" id="bd">
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                    </div>
                                    <div class="options-container">
                                        <a>
                                            <img class="option-pic" src="./foodTypeIcon/dessert.png">
                                        </a>
                                        <label class="form-check-label" for="ds">甜點</label>
                                        <input class="form-check-input" type="checkbox" value="ds" id="ds">
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <!--依美食資訊-->
                            <div class="base-container">
                                <button class="filter-btn" type="button" data-bs-toggle="collapse" data-bs-target="#food-info-filter" aria-expanded="false" aria-controls="food-info-filter">
                                    <span class="arror-right">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </span>
                                    <span class="filter-text">依美食資訊</span>
                                </button>
                                <div class="collapse" id="food-info-filter">                                                
                                    <div class="options-container">
                                        <a>
                                            <i class="fa-solid fa-angles-down"></i>
                                        </a>
                                        <label class="form-check-label" for="hl">由高到低</label>
                                        <input class="form-check-input" type="checkbox" value="hl" id="hl">
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                    </div>
                                    <div class="options-container">
                                        <a>
                                            <i class="fa-solid fa-angles-up"></i>
                                        </a>
                                        <label class="form-check-label" for="lh">由低到高</label>
                                        <input class="form-check-input" type="checkbox" value="lh" id="lh">
                                        <span>
                                            <i class="fa-solid fa-check"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <!--右邊部分-->
                <div class="right col-9">
                    <!--搜尋條-->
                    <div class="search-container">
                        <form class="row search-bar-form" action="searchresult.php" method="GET">
                            <div class="search col-12">
                                <div class="select">
                                    <div class="select-btn">
                                        <span class="filter">
                                            <i class="fas fa-filter"></i>
                                        </span>
                                        <span class="btn-text">啟用篩選</span>
                                        <span class="polygon">
                                            <i class="fas fa-caret-down"></i>
                                        </span>
                                    </div>
                            
                                    <div class="select-content">
                                        <div class="select-option"> 
                                            <!--分類-->
                                            <span class="category">分類</span>
                                            <hr>
                                            <!--依超商-->
                                            <div class="base-container">
                                                <button class="filter-btn" type="button" data-bs-toggle="collapse" data-bs-target="#cv-store" aria-expanded="false" aria-controls="cv-store">
                                                    <span class="arror-right">
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </span>
                                                    <span class="filter-text">依超商</span>
                                                </button>
                                                <div class="collapse" id="cv-store">   
                                                
                                                    <div class="options-container">
                                                        <a>
                                                            <img class="option-pic" src="FSO_image/FM_Logo.png">
                                                        </a>
                                                        <label class="form-check-label" for="全家">全家</label>
                                                        <input class="form-check-input" type="checkbox" value="全家" id="全家">
                                                        <span>
                                                            <i class="fa-solid fa-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="options-container">
                                                        <a>
                                                            <img class="option-pic" src="FSO_image/FM_Logo.png" >
                                                        </a>
                                                        <label class="form-check-label" for="7-11">7-11</label>
                                                        <input class="form-check-input" type="checkbox" value="7-11" id="7-11">
                                                        <span>
                                                            <i class="fa-solid fa-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="options-container">
                                                        <a>
                                                            <img class="option-pic" src="FSO_image/FM_Logo.png">
                                                        </a>
                                                        <label class="form-check-label" for="萊爾富">萊爾富</label>
                                                        <input class="form-check-input" type="checkbox" value="萊爾富" id="萊爾富">
                                                        <span>
                                                            <i class="fa-solid fa-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="options-container">
                                                        <a>
                                                            <img class="option-pic" src="FSO_image/FM_Logo.png">
                                                        </a>
                                                        <label class="form-check-label" for="OK超商">OK超商</label>
                                                        <input class="form-check-input" type="checkbox" value="OK超商" id="OK超商">
                                                        <span>
                                                            <i class="fa-solid fa-check"></i>
                                                        </span>
                                                    </div> 
                                                </div>
                                            </div>
    
                                            <!--依種類-->
                                            <div class="base-container">
                                                <button class="filter-btn" type="button" data-bs-toggle="collapse" data-bs-target="#cate" aria-expanded="false" aria-controls="cate">
                                                    <span class="arror-right">
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </span>
                                                    <span class="filter-text">依種類</span>
                                                </button>
                                                <div class="collapse" id="cate">
                                                    <div class="options-container">
                                                        <a>
                                                        <img class="option-pic" src="./foodTypeIcon/mainmeal.png">
                                                        </a>
                                                        <label class="form-check-label" for="主食">主食</label>
                                                        <input class="form-check-input" type="checkbox" value="主食" id="主食">
                                                        <span>
                                                            <i class="fa-solid fa-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="options-container">
                                                        <a>
                                                        <img class="option-pic" src="./foodTypeIcon/riceball.png">
                                                        </a>
                                                        <label class="form-check-label" for="飯糰">飯糰</label>
                                                        <input class="form-check-input" type="checkbox" value="飯糰" id="飯糰">
                                                        <span>
                                                            <i class="fa-solid fa-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="options-container">
                                                        <a>
                                                        <img class="option-pic" src="./foodTypeIcon/sandwich.png">
                                                        </a>
                                                        <label class="form-check-label" for="三明治">三明治</label>
                                                        <input class="form-check-input" type="checkbox" value="三明治" id="三明治">
                                                        <span>
                                                            <i class="fa-solid fa-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="options-container">
                                                        <a>
                                                        <img class="option-pic" src="./foodTypeIcon/veg.png">
                                                        </a>
                                                        <label class="form-check-label" for="蔬果">蔬果</label>
                                                        <input class="form-check-input" type="checkbox" value="蔬果" id="蔬果">
                                                        <span>
                                                            <i class="fa-solid fa-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="options-container">
                                                        <a>
                                                            <img class="option-pic" src="./foodTypeIcon/bread.png">
                                                        </a>
                                                        <label class="form-check-label" for="麵包">麵包</label>
                                                        <input class="form-check-input" type="checkbox" value="麵包" id="麵包">
                                                        <span>
                                                            <i class="fa-solid fa-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="options-container">
                                                        <a>
                                                            <img class="option-pic" src="./foodTypeIcon/dessert.png">
                                                        </a>
                                                        <label class="form-check-label" for="甜點">甜點</label>
                                                        <input class="form-check-input" type="checkbox" value="甜點" id="甜點">
                                                        <span>
                                                            <i class="fa-solid fa-check"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <!--排序-->
                                            <span class="category">排序</span>
                                            <hr>
                                            <!--依美食資訊-->
                                            <div class="base-container">
                                                <button class="filter-btn" type="button" data-bs-toggle="collapse" data-bs-target="#foods-info" aria-expanded="false" aria-controls="foods-info">
                                                    <span class="arror-right">
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </span>
                                                    <span class="filter-text">依美食資訊</span>
                                                </button>
                                                <div class="collapse" id="foods-info">                                                
                                                    <div class="options-container">
                                                        <a>
                                                            <i class="fa-solid fa-angles-down"></i>
                                                        </a>
                                                        <label class="form-check-label" for="由高到低">由高到低</label>
                                                        <input class="form-check-input" type="checkbox" value="由高到低" id="由高到低">
                                                        <span>
                                                            <i class="fa-solid fa-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="options-container">
                                                        <a>
                                                            <i class="fa-solid fa-angles-up"></i>
                                                        </a>
                                                        <label class="form-check-label" for="由低到高">由低到高</label>
                                                        <input class="form-check-input" type="checkbox" value="由低到高" id="由低到高">
                                                        <span>
                                                            <i class="fa-solid fa-check"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--依美食評分-->
                                            <div class="base-container">
                                                <button class="filter-btn" type="button" data-bs-toggle="collapse" data-bs-target="#foods-rate" aria-expanded="false" aria-controls="foods-rate">
                                                    <span class="arror-right">
                                                        <i class="fa-solid fa-chevron-right"></i>
                                                    </span>
                                                    <span class="filter-text">依美食評分</span>
                                                </button>
                                                <div class="collapse" id="foods-rate">                                                
                                                    <div class="options-container">
                                                        <a>
                                                            <i class="fa-solid fa-angles-down"></i>
                                                        </a>
                                                        <label class="form-check-label" for="由高到低">由高到低</label>
                                                        <input class="form-check-input" type="checkbox" value="由高到低" id="由高到低">
                                                        <span>
                                                            <i class="fa-solid fa-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="options-container">
                                                        <a>
                                                            <i class="fa-solid fa-angles-up"></i>
                                                        </a>
                                                        <label class="form-check-label" for="由低到高">由低到高</label>
                                                        <input class="form-check-input" type="checkbox" value="由低到高" id="由低到高">
                                                        <span>
                                                            <i class="fa-solid fa-check"></i>
                                                        </span>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <span class="divider"></span>
    
                                <input class="search-bar" type="text" id="keyword" name="keyword" placeholder="想要找哪個美食？" required>
                                    
                                <button class="submit" id="submit" type="submit">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    <span>搜尋</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <!--結果區-->
                    <div class="output">
                        <div class="output-title">
                            <span class="Ltitle">搜尋 (美食名稱) 的結果</span>
                            <span class="Rtitle">87筆</span>
                        </div>
                        
                        <!--食物展示區-->
                        <div class="food-list">
                            <?php
                            function createFoodItem($imageSrc, $logoSrc, $foodName, $satietyScore, $preferScore, $priceScore, $price) {
                                return "
                                <div class='cv'>
                                    <div class='food-container'>
                                        <img class='food-image' src='{$imageSrc}' alt='Food image'>
                                    </div>
                                    <div class='header-food'>
                                        <div class='logo-container'>
                                            <img class='food-logo' src='{$logoSrc}' alt='Food Logo'>
                                        </div>
                                        <div class='food-name'>{$foodName}</div>
                                    </div>
                                    <div class='review-container'>
                                        <div class='review-item'>
                                            <img class='review-icon' src='./FSO_image/SatietyrReview.svg' alt='Satiety Review Icon'>
                                            <div class='review-line'></div>
                                            <div class='review-score'>{$satietyScore}</div>
                                        </div>
                                        <div class='review-item'>
                                            <img class='review-icon' src='./FSO_image/PreferReview.svg' alt='Preference Review Icon'>
                                            <div class='review-line'></div>
                                            <div class='review-score'>{$preferScore}</div>
                                        </div>
                                        <div class='review-item'>
                                            <img class='review-icon' src='./FSO_image/PriceRevier.svg' alt='Price Review Icon'>
                                            <div class='review-line'></div>
                                            <div class='review-score'>{$priceScore}</div>
                                        </div>
                                    </div>
                                    <div class='price-button-container'>
                                        <div class='price'>\${$price}</div>
                                        <div class='button-container'>
                                            <div class='button'></div>
                                            <div class='button-text'>查看美食</div>
                                        </div>
                                    </div>
                                </div>
                                ";
                            }
                    
                            $food_list = [
                                ['./FSO_image/烤蔬菜番茄筆尖麵.jpg', './FSO_image/FM_Logo.png', '烤蔬菜番茄筆尖麵', 9.6, 7.6, 6.8, 70],
                                ['./FSO_image/鐵觀音黑岩泡芙.jpg', './FSO_image/FM_Logo.png', '鐵觀音黑岩泡芙', 8.5, 6.7, 5.5, 80],
                                ['./FSO_image/鐵觀音黑岩泡芙.jpg', './FSO_image/FM_Logo.png', '鐵觀音黑岩泡芙', 8.5, 6.7, 5.5, 80],
                                ['./FSO_image/鐵觀音黑岩泡芙.jpg', './FSO_image/FM_Logo.png', '鐵觀音黑岩泡芙', 8.5, 6.7, 5.5, 80]
                            ];
                    
                            foreach ($food_list as $food) {
                                echo createFoodItem(...$food);
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>

      <!-- 頁尾 -->
    <footer class="text-center py-3">
        <p>&copy; 2024 超商美食+ All Rights Reserved</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>
    <script src="search.js"></script>
</body>
</html>
