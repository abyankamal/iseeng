<?php include 'header.php' ?>
<!-- Batas Header -->
<div class="container mx-auto min-vh-100" style="padding-top: 20px;">
  <div class="text-center" style="padding-bottom: 60px;">
    <h1 class="fs-1 fw-bold text-white">Halaman Tambah Akun</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="col card">
        <div class="card-body w-100">
          <form action="proses/prosestambahakun.php" method="post">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nama Akun</label>
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