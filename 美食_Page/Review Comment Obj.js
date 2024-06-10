// 格式化時間差
// function timeAgo(date) {
//     const now = new Date();
//     const diff = now - date;
//     const minutes = Math.floor(diff / 60000);
//     if (minutes < 60) {
//         return `${minutes}分鐘以前`;
//     }
//     const hours = Math.floor(minutes / 60);
//     if (hours < 24) {
//         return `${hours}小時以前`;
//     }
//     const days = Math.floor(hours / 24);
//     return `${days}天以前`;
// }

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
