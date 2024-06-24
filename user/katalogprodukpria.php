<?php include 'header.php'; ?>
<!-- Batas Header -->
<?php include("../koneksi.php"); ?>
<div class="container mx-auto min-vh-100" style="padding-top: 20px;">
    <div class="text-center" style="padding-bottom: 60px;">
        <h1 class="fs-1 fw-bold text-white">Halaman Katalog Pakaian Pria</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col card">
                <div class="card-body w-100">
                    <table id="table" class="table table-bordered">
                        <thead>
                            <tr>
                                <td>Nomor</td>
                                <td>Nama Produk</td>
                                <td>Deskripsi</td>
                                <td>Harga</td>
                                <td>Kategori</td>
                                <td>Foto</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM products WHERE category='pakaianpria'";
                            $result = $conn->query($query);
                            foreach ($result as $row) :
                            ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['description'] ?></td>
                                    <td><?= $row['price'] ?></td>
                                    <?php if ($row['category'] == 'pakaianpria') { ?>
                                        <td>Pakaian Pria</td>
                                    <?php } else { ?>
                                        <td>Pakaian Wanita</td>
                                    <?php } ?>
                                    <td>
                                        <img src="../assets/baju/<?= $row['foto'] ?>" alt="" srcset="" width="50" height="70">
                                    </td>
                                    <td>
                                        <a href="buatpesanan.php?id=<?= $row['id'] ?>" class="btn btn-dark"><i class="fa-solid fa-book"></i></a>
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
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>
<!-- batas body -->
</body>

</html>