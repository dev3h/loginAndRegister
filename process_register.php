<?php
try {
    require './connect.php';

    $username = addslashes(trim($_POST['username']));
    $displayName = addslashes(trim($_POST['displayname']));
    $password = md5(addslashes(trim($_POST['password'])));
    $email = addslashes(trim($_POST['email']));
    $phone = addslashes(trim($_POST['phone']));

    $sql = "SELECT COUNT(*) FROM users WHERE username = '$username'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);

    if ($each['COUNT(*)'] > 0) {
        throw new Exception("Username đã tồn tại");
    } else {
        $sql = "INSERT INTO users (username, displayname, password, email, phone) VALUES ('$username', '$displayName' ,'$password', '$email', '$phone')";
        mysqli_query($connect, $sql);
        session_start();
        $_SESSION['username'] =  $username;
        $_SESSION['displayName'] =  $displayName;

        header('location: ./home.php');
        exit;
    }
} catch (\Throwable $e) {
    session_start();
    $_SESSION['error'] = $e->getMessage();
    header('location: register.php');
}
