<?php require 'header.php' ?>

<?php include '../koneksi.php' ?>
<!-- Batas Header -->
<div class="container mx-auto min-vh-100" style="padding-top: 153px;">
  <div class="row">
    <div class="col-md-12">
      <div class="col">
        <p class="text-white fw-bold fs-1 text-break">SELAMAT DATANG <?= $_SESSION['name'] ?></p>
      </div>
      <div class="col">
        <p class="text-white fw-bold fs-6 text-break text-justify" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu egestas metus. Sed eget nunc risus. Vivamus interdum ultricies ligula, ut faucibus metus molestie ullamcorper</p>
      </div>
    </div>
    <!-- <div class="col-md-1"></div>
      <div class="col-md-4">
        <?php
        $stmt1 = $conn->prepare("SELECT * FROM buku");
        $stmt1->execute();
        $totalbuku = $stmt1->rowCount();
        ?>
        <div class="col card">
          <div class="card-body w-100">
            <p class="fw-bold fs-6">Total Buku Yang Ada :</p>
            <p class="fw-bold fs-6"><?= $totalbuku ?></p>
            <br>
            <?php
            $stmt2 = $conn->prepare("SELECT * FROM user WHERE level='user'");
            $stmt2->execute();
            $totalanggota = $stmt2->rowCount();
            ?>
            <p class="fw-bold fs-6">Jumlah Anggota Perpustakaan:</p>
            <p class="fw-bold fs-6"><?= $totalanggota ?></p>
            <br>
            <?php
            $stmt3 = $conn->prepare("SELECT total FROM peminjaman");
            $stmt3->execute();
            $totalanggota = $stmt3->fetch(PDO::FETCH_ASSOC);
            $untung = array_sum($totalanggota);
            ?>
            <p class="fw-bold fs-6">Keuntungan Peminjaman :</p>
            <p class="fw-bold fs-6"><?= $untung ?></p>
          </div>
        </div>
      </div> -->
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