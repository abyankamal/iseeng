<?php include 'header.php'; ?>
<!-- Batas Header -->
<div class="container mx-auto min-vh-100" style="padding-top: 20px;">
  <div class="text-center" style="padding-bottom: 60px;">
    <h1 class="fs-1 fw-bold text-white">Halaman Tambah Buku</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="col card">
        <div class="card-body w-100">
          <form action="proses/prosestambahproduk.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
              <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Anggota">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
              <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <!-- <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Jumlah Buku</label>
              <input type="number" name="jumlahbuku" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Anggota">
            </div> -->
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Harga</label>
              <input type="number" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Anggota">
            </div>
            <label for="exampleFormControlInput1" class="form-label">Kategori</label>
            <div class="mb-3">
              <select class="form-select" name="level" aria-label="Default select example" placeholder="Tes" required>
                <option value="pakaianpria">Pakaian Pria</option>
                <option value="pakaianwanita">Pakaian Wanita</option>
              </select>
            </div>
            <label for="exampleFormControlInput1" class="form-label">Gambar Produk</label>
            <div class="input-group mb-3">
              <input type="file" accept="image/jpeg" name="gambar" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
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