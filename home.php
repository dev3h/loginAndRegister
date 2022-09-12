<?php 
session_start();
if(empty($_SESSION['username'])) {
    header('location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Đây là trang home nè</h1>
    <h3>Xin chào <?php echo $_SESSION['displayName'] ?> </h3>
    <a href="logout.php">Đăng xuất</a>
</body>
</html>