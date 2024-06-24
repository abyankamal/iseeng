<?php require 'header.php' ?>
<div class="container mx-auto min-vh-100" style="padding-top: 20px;">
  <div class="text-center" style="padding-bottom: 60px;">
    <h1 class="fs-1 fw-bold text-white">Halaman Kelola Pesanan</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="col card">
        <div class="card-body w-100">
          <br>
          <table id="table" class="table table-bordered">
            <thead>
              <tr>
                <td>No Pesanan</td>
                <td>Nama Pelanggan</td>
                <td>Produk</td>
                <td>Jumlah</td>
                <td>Total Bayar</td>
                <td>Status</td>
                <td>Aksi</td>
              </tr>
            </thead>
            <?php
            $query = "SELECT * FROM orders";
            $result = $conn->query($query);
            foreach ($result as $row) :
            ?>
              <tbody>
                <tr>
                  <td><?= $row['id'] ?></td>
                  <td><?= $row['customer_name'] ?></td>
                  <td><?= $row['products'] ?></td>
                  <td><?= $row['quantity'] ?></td>
                  <td><?= $row['total'] ?></td>
                  <td><?= $row['status'] ?></td>
                  <td>
                    <a href="proses/prosesstatuspesanan.php?id=<?= $row['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-check"></i></a>
                  </td>
                </tr>
              </tbody>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
?>
<script>
  $(document).ready(function() {
    $('#table').DataTable();
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