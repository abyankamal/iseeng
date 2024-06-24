<?php
// session_start();
// if(isset($_SESSION['level'])){
//   if((time() - $_SESSION["last_login_timestamp"]) > 900){
//     echo "<script>alert('Maaf Sesi Anda Sudah Habis, Silahkan Login Dulu');
//     document.location.href = '../logout.php';
//     </script>";
//     }else{
//       $_SESSION["last_login_timestamp"] = time();
//     }
// }else{
//   echo "<script>alert('Maaf Anda Belum Login, Silahkan Login Dulu');
//   document.location.href = '../logout.php';
//   </script>";
// }
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
  <link rel="stylesheet" href="../assets/dataTables.bootstrap5.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
  <script src="../assets/bootstrap.min.js"></script>
  <script src="../assets/all.min.js"></script>
  <script src="../assets/datatables.min.js"></script>
  <script src="../assets/jquery-3.6.0.js"></script>
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
      <div class="col col-md-7 mt-3 py-1" style="text-align: justify;">
        <div class="row">
          <div class="col-md-3 px-2">
            <a href="kelolabuku.php" class="fs-6 fw-bold text-decoration-none text-black">Kelola Buku</a>
          </div>
          <div class="col-md-3 px-2">
            <a href="kelolaanggota.php" class="fs-6 fw-bold text-decoration-none text-black">Kelola Anggota</a>
          </div>
          <div class="col-md-3 px-2">
            <a href="kelolapeminjaman.php" class="fs-6 fw-bold text-decoration-none text-black">Kelola Peminjaman</a>
          </div>
        </div>
      </div>
      <div class="col col-md-1 justify-content-end my-auto">
        <a href="../logout.php" style="color: black;"><i class="fa-solid fa-circle-user fa-2xl"></i></a>
      </div>
    </div>
  </div>
  <!-- Batas Header -->
  <div class="container mx-auto min-vh-100" style="padding-top: 20px;">
    <div class="text-center" style="padding-bottom: 60px;">
      <h1 class="fs-1 fw-bold text-white">Halaman Tambah Anggota</h1>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="col card">
          <div class="card-body w-100">
            <form action="proses/prosestambahanggota.php" method="post">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Anggota</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Anggota" required>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Username" required>
              </div>
              <label for="exampleFormControlInput1" class="form-label">Password</label>
              <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password" required>
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button" id="show-password">
                    <i class="fas fa-eye"></i>
                  </button>
                </div>
              </div>
              <label for="exampleFormControlInput1" class="form-label">Level</label>
              <div class="mb-3">
                <select class="form-select" name="level" aria-label="Default select example" placeholder="Tes" required>
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
                </select>
              </div>
              <button type="submit" class="btn btn-submit bg-dark text-white fw-bold w-100">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    const showPassword = document.getElementById("show-password");
    const password = document.getElementById("password");

    showPassword.addEventListener("click", function() {
      const type = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);
    });
  </script>
  <!-- batas body -->
  <footer>
    <center>
      <p class="align-items-end fs-4 fw-bold text-white">Copyright 2023 Kelompok RPL</p>
    </center>
  </footer>
</body>

</html>