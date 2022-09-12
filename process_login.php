<?php
try {
   require './connect.php';

    $username = addslashes(trim($_POST['username']));
    $password = md5(addslashes(trim($_POST['password'])));


         $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
         $result = mysqli_query($connect, $sql);
         if(mysqli_num_rows($result) == 1) {
            $each = mysqli_fetch_array($result);
            session_start();
            $_SESSION['username'] =  $username;
            $_SESSION['displayName'] =  $each['displayname'];
            header('location: home.php');
            exit;
         } else {
            throw new Exception("Sai tên đăng nhập hoặc mật khẩu");
         }
         
   
} catch (\Throwable $e) {
    session_start();
    $_SESSION['error'] = $e->getMessage();
    header('location: index.php');
}

