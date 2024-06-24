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
$user = $_SESSION['nama'];
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
      <a href="tentang.php" class="fs-6 fw-bold text-decoration-none text-black">Tentang</a>
      </div>
      <div class="col-md-3 mx-4">
      <a href="layanan.php" class="fs-6 fw-bold text-decoration-none text-black">Layanan</a>
      </div>
      </div>
    </div>
    <div class="col col-md-2 justify-content-end my-auto">
      <a href="../logout.php" style="color: black;"><i class="fa-solid fa-circle-user fa-2xl"></i></a>
    </div>
  </div>
</div>
<!-- Batas Header -->
<div class="container mx-auto min-vh-100" style="padding-top: 153px;">
  <div class="row">
    <div class="col-md-6">
      <div class="col">
        <p class="text-white fw-bold fs-1 text-break">SELAMAT DATANG <?= $user?></p>
      </div>
      <div class="col">
        <p class="text-white fw-bold fs-6 text-break text-justify" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu egestas metus. Sed eget nunc risus. Vivamus interdum ultricies ligula, ut faucibus metus molestie ullamcorper</p>
      </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-4">
      <div class="col card">
        <div class="card-body w-100">
          <?php
          $stmt1 = $conn->prepare("SELECT * FROM peminjaman WHERE nm_peminjam = '$user'");
          $stmt1->execute();
          $buku = $stmt1->rowCount();
          ?>
          <p class="fw-bold fs-6">Total Buku Yang Dipinjam :</p>
          <p class="fw-bold fs-6"><?= $buku ?></p>
          <br>
          <?php
          $stmt2 = $conn->prepare("SELECT judul_buku FROM peminjaman
          WHERE nm_peminjam = '$user'
          ORDER BY id_pinjam DESC
          LIMIT 1");
          $stmt2->execute();
          $buku = $stmt2->fetch(PDO::FETCH_ASSOC);
          ?>
          <p class="fw-bold fs-6">Buku Yang Terakhir Dipinjam :</p>
          <p class="fw-bold fs-6"><?= $buku['judul_buku']?></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- batas body -->
<footer>
    <center><p class="align-items-end fs-4 fw-bold text-white">Copyright 2023 Kelompok RPL</p></center>
</footer>
</body>
</html>