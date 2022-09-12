<?php session_start()?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./assets/css/login.css" />
</head>

<body>
    <form action='process_login.php' class="form-login" method='POST'>
        <?php
        if(isset($_SESSION['error'])) { ?>
            <p class="error"><?php echo $_SESSION['error'];  unset($_SESSION['error']) ?></p>
        <?php } ?>
        
        <h2>Đăng nhập</h2>
        Tên đăng nhập : <input type='text' name='username' />
        Mật khẩu : <input type='password' name='password' />
        <button class="button">Đăng nhập</button>
        <a href='./register.php'>Đăng ký</a>
        <form>
</body>

</html>