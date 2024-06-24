<?php
include '../../koneksi.php';

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
function generateRandomNumber($length)
{
    $min = pow(10, $length - 1); // Angka minimal dengan panjang tertentu
    $max = pow(10, $length) - 1; // Angka maksimal dengan panjang tertentu
    return mt_rand($min, $max); // Menghasilkan nomor acak antara min dan max
}

// Hash the password using the bcrypt algorithm.
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$panjangAngka = 6; // Panjang angka yang diinginkan

$nomorAcak = generateRandomNumber($panjangAngka);

$sql = "INSERT INTO user (id, name, username, password, level) VALUES ('$nomorAcak', '$name', '$username', '$hashedPassword', '$level')";
$stmt = $conn->prepare($sql);
$stmt->execute();

header('Location: ../kelolaakun.php');
