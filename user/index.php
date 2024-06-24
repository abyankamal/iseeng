<?php include 'header.php' ?>
<!-- Batas Header -->
<div class="container mx-auto min-vh-100" style="padding-top: 153px;">
  <div class="row">
    <div class="col-md-6">
      <div class="col">
        <p class="text-white fw-bold fs-1 text-break">SELAMAT DATANG <?= $_SESSION['name'] ?></p>
      </div>
      <div class="col">
        <p class="text-white fw-bold fs-6 text-break text-justify" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu egestas metus. Sed eget nunc risus. Vivamus interdum ultricies ligula, ut faucibus metus molestie ullamcorper</p>
      </div>
    </div>
    <!-- <div class="col-md-1"></div>
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
          <p class="fw-bold fs-6"><?= $buku['judul_buku'] ?></p>
        </div>
      </div>
    </div> -->
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