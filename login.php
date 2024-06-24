<?= require 'header.php' ?>
<!-- Batas Header -->
<div class="container mx-auto min-vh-100" style="padding-top: 153px;">
  <div class="row">
    <div class="col-md-6">
      <div class="col">
        <p class="text-white fw-bold fs-1 text-break text-center">SELAMAT DATANG DI SISTEM INFORMASI JAHIT</p>
      </div>
      <div class="col">
        <p class="text-white fw-bold fs-6 text-break" style="text-align: justify;">Silahkan Login Terlebih Dahulu Untuk Bisa Mengakses Sistem Ini</p>
      </div>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-4">
      <div class="col card">
        <div class="card-body w-100">
          <form action="verifikasilogin.php" method="post">
            <div class="form-floating mb-3">
              <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
            <div class="d-flex justify-content-end">
              <button type="submit" class="btn btn-dark justify-content-end">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- batas body -->
<!-- <footer>
  <center>
    <p class="align-items-end fs-4 fw-bold text-white">Copyright 2023 Kelompok RPL</p>
  </center>
</footer> -->
</body>

</html>