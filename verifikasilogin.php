<?php
include('koneksi.php');
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

function login($username, $password)
{
    global $conn;
    // Mengecek tabel 'users' untuk admin atau user
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = '$username'");
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Mengembalikan data user berdasarkan level
    if ($user && password_verify($password, $user['password'])) {
        return $user;
    } else {
        return false;
    }
}

if (!empty($username) || !empty($password)) {
    $levellogin = login($username, $password);
    if ($levellogin > 0) {
        $_SESSION['name'] = $levellogin['name'];
        $_SESSION['username'] = $levellogin['username'];
        $_SESSION['level'] = $levellogin['level'];
        $_SESSION['last_login_timestamp'] = time();
        if ($levellogin['level'] == 'user') {
            header('location: user/index.php');
        } else {
            header('location: admin/index.php');
        }
    } else {
        echo "<script>alert('Username Atau Password Salah'); window.location.href='login.php';</script>";
    }
}
