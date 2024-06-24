<?php

include('../../koneksi.php');

$id = $_GET['id'];

$stmt1 = $conn->prepare("SELECT * FROM buku WHERE id_buku='$id'");
$stmt1->execute();
$dataakun = $stmt1->fetch(PDO::FETCH_ASSOC);

$namaakun = $dataakun['judul_buku'];

$stmt1 = $conn->prepare("DELETE FROM peminjaman WHERE judul_buku ='$namaakun'");
$stmt1->execute();

$stmt1 = $conn->prepare("DELETE FROM buku WHERE id_buku='$id'");
$stmt1->execute();

header('Location: ../kelolaproduk.php');
