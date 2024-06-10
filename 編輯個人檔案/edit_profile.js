$(document).ready(function(){
    $('#updateBtn').on('click', function(){
        var newUname = $('#newUname').val();
        var uId = "<?php echo $uId; ?>"; // PHP變數傳遞到JavaScript
        $.ajax({
            url: 'update_uname.php',
            type: 'POST',
            data: {
                newUname: newUname,
                uId: uId
            },
            success: function(response){
                alert('暱稱已更新，刷新頁面即可查看');
                console.log(response); // 打印後端返回的響應
            },
            error: function(xhr, status, error){
                console.error(xhr);
                alert('更新失敗');
            }
        });
    });

    // 圖片預覽
    $('#file1').on('change', function(){
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#imgPreview').attr('src', e.target.result);
            }
            reader.readAsDataURL(file);
        }
    });

    // 上傳圖片
    $('#uploadBtn').on('click', function(){
        const fileInput = $('#file1')[0];
        if (fileInput.files.length > 0) {
            const formData = new FormData();    
            formData.append('file', fileInput.files[0]);
            $.ajax({
                url: 'upload_image.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response){
                    alert('圖片已上傳');
                    console.log(response); // 打印後端返回的響應
                },
                error: function(xhr, status, error){
                    console.error(xhr);
                    alert('圖片上傳失敗');
                }
            });
        } else {
            alert('請選擇圖片');
        }
    });
});