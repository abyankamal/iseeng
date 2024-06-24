<?php
include('../../koneksi.php');

$customer = $_POST['customer'];
$products = $_POST['products'];
$quantity = $_POST['quantity'];

$tanggal = date('d-m-Y');

function generateRandomNumber($length)
{
    $min = pow(10, $length - 1); // Angka minimal dengan panjang tertentu
    $max = pow(10, $length) - 1; // Angka maksimal dengan panjang tertentu
    return mt_rand($min, $max); // Menghasilkan nomor acak antara min dan max
}

$panjangAngka = 8; // Panjang angka yang diinginkan

$nomorAcak = generateRandomNumber($panjangAngka);

$stmt1 = $conn->prepare("SELECT * FROM products WHERE name='$products'");
$stmt1->execute();
$data = $stmt1->fetch(PDO::FETCH_ASSOC);

$total = intval($data['price']) * $quantity;
echo $total;


$sql = "INSERT INTO orders (id, customer_name, products, quantity, total, status) VALUE ('$nomorAcak', '$customer', '$products', '$quantity', '$total', 'Pemesanan Berhasil')";
$stmt = $conn->prepare($sql);
$stmt->execute();

header('Location: ../pesanan.php');
