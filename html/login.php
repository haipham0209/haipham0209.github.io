



<main>
        <h2>
            Đăng Nhập quản lý thông tin sản phẩm
        </h2>
        <form method="post">
            <label for="username">Tên đăng nhập:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required>
            <?php
            // Hiển thị thông báo lỗi nếu có
            if (!empty($error)) {
                echo "<p style='color: red;'>$error</p>";
                $error="";
            }
            ?>
            <input type="submit" value="Đăng nhập">
        </form>
    </main>