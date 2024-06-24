<?php
session_start();
if(isset($_SESSION['level'])){
  if((time() - $_SESSION["last_login_timestamp"]) > 900){
    echo "<script>alert('Maaf Sesi Anda Sudah Habis, Silahkan Login Dulu');
    document.location.href = '../logout.php';
    </script>";
    }else{
      $_SESSION["last_login_timestamp"] = time();
    }
}else{
  echo "<script>alert('Maaf Anda Belum Login, Silahkan Login Dulu');
  document.location.href = '../logout.php';
  </script>";
}
include('../koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Perpustakaan</title>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="../assets/bootstrap.min.js"></script>
    <script src="../assets/all.min.js"></script>
    <style>
      body {
      background-image: url(../assets/images/ganti-buku.jpg);
      background-size: cover;
      font-family: 'Poppins';
    }
     
    </style>
</head>
<body class="d-flex flex-column">
<div class="container-fluid bg-white my-auto h-25 rounded-bottom-4" style="height: 160px;">
  <div class="row">
    <div class="col col-md-4 justify-content-start text-center my-auto">
      <h1 class="fw-bold fs-1 my-2">PERPUS</h1>
    </div>
    <div class="d-flex col text-center mt-3 py-1">
      <div class="row">
      <div class="col-md-3 mx-4">
      <a href="index.php" class="fs-6 fw-bold text-decoration-none text-black">Home</a>
      </div>
      <div class="col-md-3 mx-4">
      <a href="tentang.php" class="fs-6 fw-bold text-decoration-none text-black">Tentang</a>
      </div>
      </div>
    </div>
    <div class="col col-md-2 justify-content-end my-auto">
      <a href="../logout.php" style="color: black;"><i class="fa-solid fa-circle-user fa-2xl"></i></a>
    </div>
  </div>
</div>
<!-- Batas Header -->
<div class="container mx-auto min-vh-100" style="padding-top: 72px;">
  <div class="text-center" style="padding-bottom: 86px;">
    <h1 class="fs-1 fw-bold text-white">Layanan Perpustakaan</h1>
  </div>
  <div class="row justify-content-center">
    <div class="col col-md-4">
        <a href="layananpeminjamanbuku.php" class="btn btn-submit w-100 bg-white">
          <p class="fw-bold fs-3 my-5">Layanan<br> Peminjaman Buku</p>
        </a>
    </div>
    <div class="col-md-1"></div>
      <div class="col col-md-4">
          <a href="layananpengembalianbuku.php" class="btn btn-submit w-100 bg-white">
            <p class="fw-bold fs-3 my-5">Layanan<br> Pengembalian Buku</p>
          </a>
      </div>
  </div>
</div>
<!-- batas body -->
<footer>
    <center><p class="align-items-end fs-4 fw-bold text-white">Copyright 2023 Kelompok RPL</p></center>
</footer>
</body>
</html>