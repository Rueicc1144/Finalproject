<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>分析頁面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Analysis OBJ.css">
    <link rel="stylesheet" type="text/css" href="Navigation bar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
            <a href="../搜尋功能/index.php">
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
    <?php
    if($_SESSION["access"]  == "admin" ){
    ?>
    <div class="chart-placeholder">
        <span class="chart-title">使用者性別比例</span>
        <div id="piechart"></div>
        <div class="downloadBtn-placeholder">
            <button onclick="downloadExcel()">下載Excel</button>
            <button onclick="downloadPDF()">下載PDF</button>
        </div>
    </div>
    <?php
    }else{
    ?>
    <div class="chart-placeholder">
        <span class="chart-title">你不是管理員</span>
    </div>
    <?php
        
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>

    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(gender_Piechart);
        
        // 資料庫
        const gender_Arr = [
            ['性別', '人數'],
            ['男性', 11],
            ['女性', 2]
        ];

        function gender_Piechart() {
            let gender_Data = google.visualization.arrayToDataTable(gender_Arr);

            // 判斷數字較高的性別並設定顏色
            let maleCount = gender_Data.getValue(0, 1);
            let femaleCount = gender_Data.getValue(1, 1);

            let maleColor = maleCount > femaleCount ? '#BC4B51' : '#FFC619';
            let femaleColor = femaleCount > maleCount ? '#BC4B51' : '#FFC619';

            let options = {
                title: '',
                is3D: true,
                slices: {
                    0: { color: maleColor },
                    1: { color: femaleColor }
                },
                legend: {
                    position: 'right',  // 設置圖例位置
                    alignment: 'center' // 設置圖例垂直置中
                }
            };

            let chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(gender_Data, options);
        }

        function downloadExcel() {
            let data = [
                ['性別', '人數'],
                ['男性', 11],
                ['女性', 2]
            ];
            let worksheet = XLSX.utils.aoa_to_sheet(data);
            let workbook = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(workbook, worksheet, "Sheet1");
            XLSX.writeFile(workbook, 'gender_data.xlsx');
        }

        function downloadPDF() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();
            
            doc.text("使用者性別", 20, 20);

            // 生成表格
            doc.autoTable({
                head: [gender_Arr[0]], // 首列
                body: gender_Arr.slice(1), // 表格內容
                startY: 30 // 表格開始的 Y 坐標
            });

            doc.save('gender_data.pdf');
        }

    </script>
</body>
</html>
