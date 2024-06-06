<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>美食展示物件</title>
    <link rel="stylesheet" href="Food Show Obj.css">
</head>

<body>
    <div class="food-list">
        <?php
        function createFoodItem($imageSrc, $logoSrc, $foodName, $satietyScore, $preferScore, $priceScore, $price) {
            return "
            <div class='container'>
                <div class='food-container'>
                    <img class='food-image' src='{$imageSrc}' alt='Food image'>
                </div>
                <div class='header'>
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
</body>
</html>
