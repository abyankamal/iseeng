<?php include 'header.php' ?>
<!-- Batas Header -->
<div class="container mx-auto min-vh-100" style="padding-top: 20px;">
  <div class="text-center" style="padding-bottom: 60px;">
    <h1 class="fs-1 fw-bold text-white">Halaman Edit Akun</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="col card">
        <div class="card-body w-100">
          <?php
          $id = $_GET['id'];
          $query = "SELECT * FROM anggota WHERE id_buku='$id'";
          $result = $conn->query($query);
          foreach ($result as $row) :
          ?>
            <form action="proses/proseseditanggota.php" method="post">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="hidden" name="id" value="<?= $row['id'] ?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama" readonly>
                <input type="text" name="nama" value="<?= $row['name'] ?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama" readonly>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input type="text" name="username" value="<?= $row['username'] ?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Username" readonly>
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
              <button type="submit" class="btn btn-submit bg-dark text-white fw-bold w-100">Simpan</button>
            </form>
          <?php endforeach; ?>
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