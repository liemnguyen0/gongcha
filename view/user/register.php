<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm tài khoản khách hàng</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <style>
        body {
            /* margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7; */
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"], input[type="password"], input[type="file"], select {
            width: calc(100% - 20px);
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .password-container {
            position: relative;
        }
        .toggle-password {
            position: absolute;
            right: 20px;
            top: 35%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        input[type="submit"] {
            background-color: #c32032;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #fbd6b4;
            color: black;
        }
        button {
            background-color: #c32032;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            position: absolute;
            margin-left: 10px;
            /* left: 30%; */

        }
        button:hover {
            background-color: #fbd6b4;
            color: black;
        }
        input:focus {
            outline: none;
            border-color: #5cb85c; /* Đổi màu viền khi focus */
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Thêm tài khoản khách hàng</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="username">UserName:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <div class="password-container">
            <input type="password" id="password" name="password" required>
            <span class="toggle-password" onclick="togglePassword()">
                <img src="public/images/icon2.jpg" id="toggle-icon" alt="Toggle Password" width="24">
            </span>
        </div>

        <label for="hoten">Họ tên:</label>
        <input type="text" id="hoten" name="hoten" required>

        <label for="sdt">Số điện thoại:</label>
        <input type="text" id="sdt" name="sdt" required pattern="\d{10,11}" title="Nhập số điện thoại hợp lệ (10-11 chữ số)">

        <label for="diachi">Địa chỉ:</label>
        <input type="text" id="diachi" name="diachi" required>

        <input type="submit" value="Lưu">
        <button onclick="window.location.href='index_home.php?controller=login&action=loginForm';">Hủy</button>
    </form>
</div>
<?php include 'view/user/footer.php'; ?>
<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('toggle-icon');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.src = 'public/images/icon1.jpg'; // Hình ảnh khi thấy mật khẩu
        } else {
            passwordInput.type = 'password';
            toggleIcon.src = '.public/images/icon2.jpg'; // Hình ảnh khi ẩn mật khẩu
        }
    }
</script>
<script src="public/js/script.js"></script>
</body>
</html>