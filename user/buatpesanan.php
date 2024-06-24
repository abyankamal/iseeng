<?php include 'header.php' ?>
<!-- Batas Header -->
<?php include("../koneksi.php"); ?>
<div class="container mx-auto min-vh-100" style="padding-top: 20px;">
  <div class="text-center" style="padding-bottom: 60px;">
    <h1 class="fs-1 fw-bold text-white">Konfirmasi Pembelian Produk</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="col card">
        <div class="card-body w-100">
          <?php
          $id = $_GET['id'];
          $query = "SELECT * FROM products WHERE id='$id'";
          $result = $conn->query($query);
          foreach ($result as $row) :
          ?>
            <form action="proses/prosespembelian.php" method="post">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Pembeli</label>
                <input type="text" name="customer" value="<?= $_SESSION['name']; ?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Username" readonly>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                <input type="text" name="products" value="<?= $row['name']; ?>" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Username" readonly>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Total Beli</label>
                <input type="number" name="quantity" class="form-control" id="exampleFormControlInput1" required>
              </div>
              <button type="submit" class="btn btn-dark text-white fw-bold w-100">Konfirmasi Pembelian</button>
            </form>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- batas body -->
<footer>
  <center>
    <p class="align-items-end fs-4 fw-bold text-white">Copyright 2023 Kelompok RPL</p>
  </center>
</footer>
</body>

</html>