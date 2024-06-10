2024/6/10 5:18更新
### 1.分析頁面完成
只有管理員的帳號可以看

### 2.側欄多一欄只有管理員帳號才看的到的連結
改動是每個頁面的主頁php
還有logincheck.php新增了一個access的SESSION

2024/6/10更新
### 1.編輯個人檔案頁面時做成功
編輯個人檔案的部分可以成功更新使用者圖片，使用者名稱

### 2.獨立"登出"資料夾
內容:
logout.php
利用session_destroy(); 
銷毀所有SESSION。

### 3.全頁面主頁更新導覽列、側欄
WHAT IS 全頁面主頁? 
EX:資料夾"我的蒐藏"=> 主頁:collections.php
   資料夾"使用者評價頁面"=> 主頁:user_comment.php
   ...
更新導覽列、側欄，使兩者能透過登入後的SESSION，顯示該使用者的頭貼，ID
<span style="color : lightblue;">導覽列如果不想整個下載，我貼在下面，可以自己去複製更改，CSS也放下面</span>

### 4.登入後的logincheck.php小改動
登入判斷有新增其他SESSION，這部分文件建議可直接複製貼上

導覽列:


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
      --> 
    ```
CSS:

    

      @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap');
      
      body {
          margin: 0;
          font-family: "Noto Sans TC", sans-serif;
          display: flex;
          flex-direction: column;
          height: 100vh; /* 設置整個頁面的高度 */
      }
      
      /* 導覽列樣式 */
      .navBar {
          display: flex;
          align-items: center;
          background-color: #FFC619;
          padding: 33px 5%;
          width: 100%;
          height: 120px;
          box-sizing: border-box;
          position: fixed;
          top: 0;
          z-index: 1000; /* 確保導航欄在最上層 */
      }
      
      /* 漢堡選單 */
      .bergerMenu-placeholder {
          display: flex;
          align-items: center;
      }
      
      /* LOGO */
      .logo-placeholder {
          position: absolute;
          width: 70px;
          height: 70px;
          left: 50%;
          transform: translateX(-50%);
      }
      
      .logo {
          position: absolute;
          width: 100%;
          height: 100%;
      }
      
      /* 使用者資料 */
      .User-placeholder {
          display: flex;
          flex-direction: row;
          align-items: center;
          justify-content: flex-end;
          position: relative;
          width: 100%;
      }
      
      .hello-text {
          display: flex;
          align-items: center;
          justify-content: center;
          text-align: right;
          color: #ffffff;
          font-size: 20px;
          margin-right: 20px; /* 調整文字與照片間距 */
      }
      
      .photo-placeholder {
          display: flex;
          align-items: center;
          justify-content: center;
          position: relative;
      }
      
      .user-photo {
          background: #d9d9d9;
          border-radius: 50%;
          flex-shrink: 0;
          width: 50px;
          height: 50px;
          position: relative;
      }
      
      /* 懸浮視窗 */
      .hover-windows-placeholder {
          display: none;
          position: absolute;
          width: 300px;
          top: 100%; /* 視窗顯示在 photo-placeholder 下方 */
          padding-top: 5px;
          right: 0; /* 切齊使用者大頭貼 */
          /* background-color: rgb(71, 88, 88); */
      }
      
      .hover-windows {
          display: flex;
          flex-direction: column;
          color: white;
          background-color: #BC4B51;
          padding: 20px;
          gap: 20px;
          border-radius: 5px;
      }
      
      .photo-placeholder:hover .hover-windows-placeholder {
          display: block;
      }
      
      .windows-placeholder {
          display: flex;
          flex-direction: column;
          width: 100%;
      }
      
      .windows-placeholder a{
          color: #ffffff;
      }
      
      .windows-placeholder a:hover, a:visited, a:link, a:active {
          color: #ffffff;
          text-decoration: none;
      }
      
      .windows-line {
          display: flex;
          width: 90%;
          height: 1px;
          background-color: #D9777C; /* 線條顏色 */
          margin: 10px 5%; /* 線條上下間距 */
      }
      
      .setting, .log-out {
          display: flex;
          align-items: center;
          gap: 10px;
          border-radius: 5px;
          padding: 15px;
      }
      
      .setting:hover, .log-out:hover {
          background-color: #D9777C;
      }
      
      .setting-icon, .log-out-icon {
          width: 28px; 
          height: 28px; 
      }
      
      .setting-text, .log-out-text {
          display: flex;
          font-size: 20px;
          justify-content: center; /* 水平置中 */
      }
      
      .button-placeholder {
          display: flex;
          position: relative;
          width: 284px;
          height: 100%;
          gap: 32px;
          justify-content: space-between;
          align-items: center;
          margin-left: auto;
      }
      
      .button-placeholder a{
          color: #ffffff;
      }
      
      .button-placeholder a:hover, a:visited, a:link, a:active {
          color: #ffffff;
          text-decoration: none;
      }
      
      .logIn-btn, .signUp-btn {
          display: flex;
          justify-content: center;
          align-items: center;
          width: 100%;
          height: 100%;
          font-size: 20px;
          color: #ffffff;
          position: relative;
          overflow: hidden;
      }
      
      .logIn-btn::after, .signUp-btn::after {
          content: "";
          position: absolute;
          top: 50%;
          left: 50%;
          width: 150%;
          height: 150%;
          background-image: url('./NavBar_image/logo.png');
          background-size: cover;
          background-position: center;
          color: #ffffff;
          transition: transform 0.3s;
          transform: translate(-50%, -50%) scale(0);
      }
      
      .logIn-btn:hover::after, .signUp-btn:hover::after {
          transform: translate(-50%, -50%) scale(1);
      }
      
      .signUp-btn {
          background-color: #BC4B51;
          border-radius: 5px;
      }
      
      /* 側欄 */
      .sidebar-placeholder {
          position: absolute;
          width: 250px;
          height: 100%;
          left: -250px;
          transition: left 0.3s ease;
      }
      
      .sidebar {
          position: fixed;
          display: flex;
          flex-direction: column;
          width: 250px;
          height: calc(100% - 120px);
          align-items: center;
          top: 120px;
          padding: 20px;
          box-sizing: border-box;
          color: white;
          background-color: #BC4B51;
      }
      
      .sidebar a{
          color: #ffffff;
      }
      
      .sidebar a:hover, a:visited, a:link, a:active {
          color: #ffffff;
          text-decoration: none;
      }
      
      .bergerMenu-placeholder:hover .sidebar-placeholder {
          left: 0;
      }
      
      .header {
          font-size: 24px;
          text-align: center;
          margin-bottom: 40px;
      }
      
      .profile {
          text-align: center;
          margin-bottom: 40px;
      }
      
      .profile-icon {
          width: 80px;
          height: 80px;
          border-radius: 50%;
          margin-bottom: 10px;
      }
      
      .user-id {
          font-size: 20px;
      }
      
      .menu {
          display: flex;
          flex-direction: column;
          gap: 10px;
      }
      
      .menu-item {
          display: flex;
          align-items: center;
          gap: 10px;
          padding: 10px;
          border-radius: 5px;
          color: #D9777C;
      }
      
      .menu-item:hover {
          background-color: #D9777C;
      }
      
      .icon {
          width: 32px;
          height: 32px;
      }
      
      .menu-text {
          font-size: 20px;
      }

