<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>

    <form method="post" action="process_register.php" class="form">
        <?php
        if(isset($_SESSION['error'])) { ?>
            <p class="error"><?php echo $_SESSION['error'];  unset($_SESSION['error']) ?></p>
        <?php } ?>
        
        <h2>Đăng ký thành viên</h2>

        Username: <input type="text" name="username" required>

        Displayname: <input type="text" name="displayname" required>

        Password: <input type="password" name="password" required />

        Email: <input type="email" name="email" required />

        Phone: <input type="text" name="phone" required />

        <button class="btn">Đăng ký</button>
        <p>Bạn có tài khoản rồi? <a href='./index.php'>Đăng nhập</a></p>
    </form>

</body>

</html>