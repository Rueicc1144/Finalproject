// 格式化時間差
function timeAgo(date) {
    const now = new Date();
    const diff = now - date;
    const minutes = Math.floor(diff / 60000);
    if (minutes < 60) {
        return `${minutes}分鐘以前`;
    }
    const hours = Math.floor(minutes / 60);
    if (hours < 24) {
        return `${hours}小時以前`;
    }
    const days = Math.floor(hours / 24);
    return `${days}天以前`;
}

// 創建評價留言物件
function createReviewComment(userPhoto, userName, reviewTime, reviewText, satietyScore, preferenceScore, priceScore, likeCount, dislikeCount, uploadedPhotos) {
    const reviewTimeAgo = timeAgo(new Date(reviewTime));

    const container = document.createElement('div');
    container.classList.add('comment-container');

    const content = `
        <div class="comment-content">
            <div class="user-info">
                <div class="user-placeholder">
                    <img class="user-photo" src="${userPhoto}" alt="User Photo" />
                </div>
                <div class="user-details">
                    <div class="username">${userName}</div>
                    <div class="time-info">
                        <img class="clock-icon" src="./RCO_Image/clock.svg" alt="Clock Icon" />
                        <span>${reviewTimeAgo}</span>
                    </div>
                </div>
            </div>
            <div class="review-text">
                ${reviewText}
            </div>
            
            <div class="review-info">
                <div class="review-container">
                    <div class="review-item">
                        <img class="review-icon" src="./RCO_image/SatietyrReview.png" alt="Satiety Review Icon">
                        <div class="review-line"></div>
                        <div class="review-score">${satietyScore}</div>
                    </div>
                    <div class="review-item">
                        <img class="review-icon" src="./RCO_image/PreferReview.png" alt="Preference Review Icon">
                        <div class="review-line"></div>
                        <div class="review-score">${preferenceScore}</div>
                    </div>
                    <div class="review-item">
                        <img class="review-icon" src="./RCO_image/PriceReview.png" alt="Price Review Icon">
                        <div class="review-line"></div>
                        <div class="review-score">${priceScore}</div>
                    </div>
                </div>
        
                <div class="likes-container">
                    <div class="likes-dislikes">
                        <div class="like-item">
                            <img class="like-icon" src="./RCO_image/upvote.svg" alt="Like Icon" />
                            <div class="review-score">${likeCount}</div>
                        </div>
                        <div class="review-line"></div>
                        <div class="dislike-item">
                            <img class="dislike-icon" src="./RCO_image/downvote.svg" alt="Dislike Icon" />
                            <div class="review-score">${dislikeCount}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="review-image">
            <div class="overlay"></div> <!-- 底圖 -->
            <div class="image-placeholder"></div>

            <div class="image-count">
                <img class="icon" src="./RCO_image/image.svg" alt="Image Icon" />
                <span>${uploadedPhotos.length}</span>
            </div>
        </div>
    `;

    container.innerHTML = content;

    // 疊在原圖的下一張照片
    const image02Placeholder = container.querySelector('.overlay');
    const img02 = document.createElement('img');
    img02.src = uploadedPhotos[1];
    img02.alt = "Uploaded Photo";
    img02.style.width = '100%';
    img02.style.height = '100%';
    image02Placeholder.appendChild(img02);

    // 圖片瀏覽器
    const imagePlaceholder = container.querySelector('.image-placeholder');
    const img = document.createElement('img');
    img.src = uploadedPhotos[0]; // 只顯示第一張圖片
    img.alt = "Uploaded Photo";
    img.style.width = '100%';
    img.style.height = '100%';

    img.addEventListener('click', () => openModal(0, uploadedPhotos));
    imagePlaceholder.appendChild(img);

    document.getElementById('comment-container').appendChild(container);

    //按讚或倒讚!增加功能待開發!
    const likeIcon = document.querySelector('.like-icon');
    const dislikeIcon = document.querySelector('.dislike-icon');

    likeIcon.addEventListener('click', function() {
        likeIcon.src = "./RCO_Image/upvote_filled.svg";
        dislikeIcon.src = "./RCO_Image/downvote.svg";
    });

    dislikeIcon.addEventListener('click', function() {
        dislikeIcon.src = "./RCO_Image/downvote_filled.svg";
        likeIcon.src = "./RCO_Image/upvote.svg";
    });

}

// 開啟圖片瀏覽器
function openModal(startIndex, images) {
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    let currentIndex = startIndex;

    function showImage(index) {
        modalImg.src = images[index];
    }

    showImage(currentIndex);
    modal.style.display = "block";

    document.getElementById('prev').onclick = () => {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        showImage(currentIndex);
    };

    document.getElementById('next').onclick = () => {
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
    };

    document.querySelector('.close').onclick = () => {
        modal.style.display = "none";
    };
}



//資料庫
let reviewComments = [
    {
        userPhoto: './RCO_Image/userPhoto.jpg',
        userName: '使用者名稱',
        reviewTime: '2023-05-22T14:48:00',
        reviewText: 'm ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula.',
        satietyScore: '8.6',
        preferenceScore: '9.7',
        priceScore: '9.4',
        likeCount: '69',
        dislikeCount: '87',
        uploadedPhotos: ['./RCO_Image/uploadedPhoto1.jpg', './RCO_Image/uploadedPhoto2.jpg']
    },
    {
        userPhoto: './RCO_Image/userPhoto.jpg',
        userName: '使用者名稱',
        reviewTime: '2023-05-22T14:48:00',
        reviewText: 'm ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula.',
        satietyScore: '3.6',
        preferenceScore: '1.7',
        priceScore: '5.4',
        likeCount: '7',
        dislikeCount: '6',
        uploadedPhotos: ['./RCO_Image/uploadedPhoto1.jpg', './RCO_Image/uploadedPhoto2.jpg']
    },
    {
        userPhoto: './RCO_Image/userPhoto.jpg',
        userName: '使用者名稱',
        reviewTime: '2023-05-22T14:48:00',
        reviewText: 'm ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula.',
        satietyScore: '8.0',
        preferenceScore: '6.7',
        priceScore: '4.4',
        likeCount: '11',
        dislikeCount: '2',
        uploadedPhotos: ['./RCO_Image/uploadedPhoto1.jpg']
    }
    // 在這裡引入更多的留言物件
];

// 示例使用
for (let i = 0; i < reviewComments.length; i++) {
    createReviewComment(
        reviewComments[i].userPhoto,
        reviewComments[i].userName,
        reviewComments[i].reviewTime,
        reviewComments[i].reviewText,
        reviewComments[i].satietyScore,
        reviewComments[i].preferenceScore,
        reviewComments[i].priceScore,
        reviewComments[i].likeCount,
        reviewComments[i].dislikeCount,
        reviewComments[i].uploadedPhotos
    );
}
