<?php
include('../../koneksi.php');

$peminjam = $_POST['nm_peminjam'];
$namabuku = $_POST['judul_buku'];
$lamapinjam = $_POST['lama_pinjam'];

$tanggal = date('d-m-Y');

function generateRandomNumber($length) {
    $min = pow(10, $length - 1); // Angka minimal dengan panjang tertentu
    $max = pow(10, $length) - 1; // Angka maksimal dengan panjang tertentu
    return mt_rand($min, $max); // Menghasilkan nomor acak antara min dan max
}

$panjangAngka = 8; // Panjang angka yang diinginkan

$nomorAcak = generateRandomNumber($panjangAngka);

$stmt1 = $conn->prepare("SELECT * FROM buku WHERE judul_buku='$namabuku'");
$stmt1->execute();
$databuku = $stmt1->fetch(PDO::FETCH_ASSOC);

$totalharga = $databuku['biaya_sewa'] * $lamapinjam;

echo "$totalharga";

$updatejumlahbuku = $databuku['jumlah_buku'] - 1;

echo "$updatejumlahbuku";

$stmt2 = $conn->prepare("SELECT judul_buku FROM peminjaman WHERE nm_peminjam = '$peminjam' AND status='Sedang Dipinjam'");
$stmt2->execute();

$rowCount = $stmt2->rowCount();

if($lamapinjam > 30){
    echo "<script>alert('Dilarang Meminjam Buku Lebih Dari Sebulan'); window.location.href='../layananpeminjamanbuku.php';</script>";
}elseif($rowCount > 0){
    echo "<script>alert('Kembalikan Buku Yang Sebelumnya Dipinjam'); window.location.href='../layananpeminjamanbuku.php';</script>";
}else{
    $sql = "INSERT INTO peminjaman (id_pinjam, tgl_pinjam, nm_peminjam, judul_buku, lama_pinjam, total, status) VALUE ('$nomorAcak', '$tanggal', '$peminjam', '$namabuku', '$lamapinjam', '$totalharga', 'Sedang Dipinjam')";
    $stmt = $conn->prepare($sql);
    $stmt->execute(); 

    $sql1 = "UPDATE buku SET jumlah_buku = '$updatejumlahbuku'WHERE judul_buku='$namabuku'";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->execute();

    header('Location: ../layananpengembalianbuku.php');
}


?>