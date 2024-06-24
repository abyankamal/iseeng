<?php

include('../../koneksi.php');

$idpinjam = $_GET['id'];

$stmt1 = $conn->prepare("SELECT * FROM peminjaman WHERE id_pinjam='$idpinjam'");
$stmt1->execute();
$datapinjam = $stmt1->fetch(PDO::FETCH_ASSOC);

$namabuku = $datapinjam['judul_buku'];

$stmt2 = $conn->prepare("UPDATE peminjaman SET status = 'Sudah Dikembalikan' WHERE id_pinjam='$idpinjam'");
$stmt2->execute();

$stmt3 = $conn->prepare("SELECT * FROM buku WHERE judul_buku='$namabuku'");
$stmt3->execute();
$updatejumlahbuku = $stmt3->fetch(PDO::FETCH_ASSOC);

$updatejumlahbuku = $databuku['jumlah_buku'] + 1;

$sql1 = "UPDATE buku SET jumlah_buku = '$updatejumlahbuku'WHERE judul_buku='$namabuku'";
$stmt4 = $conn->prepare($sql1);
$stmt4->execute();

header('Location: ../layananpeminjamanbuku.php');
?>