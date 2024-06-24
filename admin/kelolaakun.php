<?php include 'header.php' ?>
<!-- Batas Header -->
<?php include("../koneksi.php"); ?>
<div class="container mx-auto min-vh-100" style="padding-top: 20px;">
  <div class="text-center" style="padding-bottom: 60px;">
    <h1 class="fs-1 fw-bold text-white">Halaman Kelola Akun</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="col card">
        <div class="card-body w-100">
          <a href="tambahanggota.php" class="btn btn-submit bg-dark text-white mb-3 fw-bold">Tambah Akun</a>
          <br>
          <table id="table" class="table table-bordered">
            <thead>
              <tr>
                <td>No Anggota</td>
                <td>Nama Akun</td>
                <td>Username</td>
                <td>Level</td>
                <td>Aksi</td>
              </tr>
            </thead>
            <?php
            $query = "SELECT * FROM user";
            $result = $conn->query($query);
            foreach ($result as $row) :
            ?>
              <tbody>
                <tr>
                  <td><?= $row['id'] ?></td>
                  <td><?= $row['name'] ?></td>
                  <td><?= $row['username'] ?></td>
                  <td><?= $row['level'] ?></td>
                  <td>
                    <a href="editakun.php?id=<?= $row['id'] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="proses/proseshapusakun.php?id=<?= $row['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
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