<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" href="webcontent.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="frame">
        <div class="content">
            <div class="main-content">
            <?php
            $link  = mysqli_connect('localhost', 'finalproject', '12345', 'finalproject');
            //SQl語法
            $date = strtotime("+7 days", time());

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $account = mysqli_real_escape_string($link, $_POST['account']);
                $password = mysqli_real_escape_string($link, $_POST['password']);
                $SQL = "SELECT * FROM users WHERE Id = '$account' AND sPass = '$password' ";
                $result = mysqli_query($link, $SQL) or die("選取錯誤");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION["check"] = "Yes";
                    setcookie("Acc", $account, $date);
                    header("Location: index.php");
                }else{
                    $_SESSION["check"] = "No";
                    setcookie("Acc", "錯誤", $date);
                    echo "<div class='label' >帳號或密碼錯誤</div>";
                    header("Refresh:2;login.php");
                }
            }else{
            ?>
                <h1>會員登入</h1>
                <div class="mx-3">
                    <form name="login" method="POST" action="">
                        <label>帳號</label>
                        <input type="text" class="form-control" name="account" value="" required>

                        <label>密碼</label>
                        <input type="password" class="form-control" name="password" value="" required>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" required>
                            <label>
                                我是機器人才怪
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">登入</button>

                        <!--註冊-->

                        <div class="links">
                            還沒有帳號? <a href="register.php">馬上註冊!</a>
                        </div>
                    </form>


                </div>


                <?php
                }
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>