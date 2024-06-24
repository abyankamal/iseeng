<?php
include '../../koneksi.php';

$name = $_POST['name'];
$gambar = $_FILES['gambar']['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$level = $_POST['level'];
function generateRandomNumber($length)
{
    $min = pow(10, $length - 1); // Angka minimal dengan panjang tertentu
    $max = pow(10, $length) - 1; // Angka maksimal dengan panjang tertentu
    return mt_rand($min, $max); // Menghasilkan nomor acak antara min dan max
}

$panjangAngka = 4; // Panjang angka yang diinginkan

$nomorAcak = generateRandomNumber($panjangAngka);

$targetdir = '../../assets/baju/';

$targetfile = $targetdir . basename($gambar);

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $targetfile)) {
    $sql = "INSERT INTO products (id, name, description, price, category, foto) VALUES ('$nomorAcak', '$name', '$description','$price', '$level', '$gambar')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header('Location: ../kelolaproduk.php');
} else {
    echo "Foto Gagal Diupload";
    header('Location: ../tambahproduk.php');
}
