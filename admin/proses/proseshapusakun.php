<?php

include('../../koneksi.php');

$id = $_GET['id'];

$stmt1 = $conn->prepare("SELECT * FROM user WHERE id='$id'");
$stmt1->execute();
$dataakun = $stmt1->fetch(PDO::FETCH_ASSOC);

$namaakun = $dataakun['nama'];

$stmt1 = $conn->prepare("DELETE FROM peminjaman WHERE nm_peminjam='$namaakun'");
$stmt1->execute();

$stmt1 = $conn->prepare("DELETE FROM user WHERE id='$id'");
$stmt1->execute();

header('Location: ../kelolaanggota.php');
?>