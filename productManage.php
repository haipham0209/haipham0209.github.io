<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Của Hàng Tạp Hóa Thừa Vân</title>  
    <link rel="stylesheet" href="styles/All.css">
    <link rel="stylesheet" href="styles/prductM.css">

</head>
<body>
    <header>
        <h1><a href="index.html"><img class="logoImage" src="./images/Untitled.png" alt="logo" width="125"></a></h1>
        <nav class="nav-menu">
            <ul>
                <li><label for="search">TÌM KIẾM</label></li>
                <input class="search1" type="search" placeholder="Nhập tên sản phẩm ở đây">
                <a href="index.html"><li>TRANG CHỦ</li></a>
                <li><a target="_blank" href="https://www.google.com/maps/place/C%E1%BB%ADa+H%C3%A0ng+T%E1%BA%A1p+H%C3%B3a+Th%E1%BB%ABa+V%C3%A2n/@13.736501,109.0825916,17z/data=!3m1!4b1!4m6!3m5!1s0x316f118e939df8e5:0x920162b8af53ec8f!8m2!3d13.736501!4d109.0851665!16s%2Fg%2F11b67gdbds?entry=ttu">BẢN ĐỒ</a></li>
                <li><a  href="./sanpham.html"> SẢN PHẨM</a></li>
                <li><a href="#">THÔNG TIN CỬA HÀNG</a></li>
                <li><a href="login.php">ĐĂNG NHẬP</a></li>
                <li><a href="dangky.html">ĐĂNG KÝ</a></li>
            </ul>
        </nav>
    </header>
    <main>
<h2>
    Hello PRODUCT MANAGER
</h2>
    <button id="cameraButton" onclick="startCamera()">Khởi Động Camera</button>
    <video id="videoElement" width="400" height="300" style="display:none;"></video>
    <script>
        async function startCamera() {
            try {
                const stream = await navigator.mediaDevices.getUserMedia({ video: true });

                const videoElement = document.getElementById('videoElement');
                videoElement.srcObject = stream;

                videoElement.onloadedmetadata = (e) => {
                    videoElement.play();
                };
            } catch (error) {
                console.error('Không thể truy cập camera:', error);
            }
        }
    </script>
    </main>
    <footer>
        <a href="index.html"><img src="./images/Untitled.png" alt="logo" width="200" height="110 "></a>
        <div class="sns-icons">
            <a href="https://twitter.com/i/flow/login?redirect_after_login=%2F%3Flang%3Dvi"><img src="images/twitter.png" alt="twitter" width="32"></a>
            <a href="https://www.facebook.com/"><img src="images/facebook.png" alt="facebook" width="32"></a>
            <a href="https://www.instagram.com/explore/tags/instafa/"><img src="images/instagram.png" alt="instagram" width="32"></a>
          </div>
        <small> Coppyright&commat; ThuaVan. All Rights Reserved.</small>
    </footer>
</body>
</html>