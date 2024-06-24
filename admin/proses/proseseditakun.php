<?php
include('../../koneksi.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['$username'];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

if ($_POST['password'] > '') {
    $stmt = $conn->prepare("UPDATE user SET nama = '$nama', username='$username' WHERE id='$id'");
    $stmt->execute();
    echo "<script>alert('User Sukses Di Edit Tanpa Merubah Password');
    document.location.href = '../kelolaakun.php';
    </script>";
} else {
    $stmt = $conn->prepare("UPDATE user SET nama = '$nama', username='$username', password='$password' WHERE id='$id'");
    $stmt->execute();
    echo "<script>alert('User Sukses Merubah Password');
       document.location.href = '../kelolaakun.php';
       </script>";
}
