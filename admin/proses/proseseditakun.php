<?php
include('../../koneksi.php');

$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['$username'];
$password = $_POST['password'];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

if (empty($password)) {
    $stmt = $conn->prepare("UPDATE user SET name = '$name', username='$username' WHERE id='$id'");
    $stmt->execute();
    echo "<script>alert('User Sukses Di Edit Tanpa Merubah Password');
    document.location.href = '../kelolaakun.php';
    </script>";
} else {
    $stmt = $conn->prepare("UPDATE user SET name = '$name', username='$username', password='$password' WHERE id='$id'");
    $stmt->execute();
    echo "<script>alert('User Sukses Merubah Password');
       document.location.href = '../kelolaakun.php';
       </script>";
}
