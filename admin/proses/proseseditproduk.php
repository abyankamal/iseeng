<?php
include '../../koneksi.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$category = $_POST['ca$category'];
$gambar = $_FILES['gambar']['name'];

if ($gambar) {
    $targetdir = '../../assets/baju/';
    $targetfile = $targetdir . basename($gambar);
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $targetfile)) {
        $stmt = $conn->prepare("UPDATE products SET name = '$name', description = '$description', price = '$price', category = '$category', foto = '$foto',  WHERE id = :id");
        $stmt->execute();
    } else {
        echo "Foto gagal diupload";
        header('Location: ../editproduk.php?id=' . $id);
        exit();
    }
} else {
    $sql = "UPDATE products SET name = :name, description = :description, price = :price, category = :category WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':category', $level);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
}

if ($stmt->execute()) {
    header('Location: ../kelolaproduk.php');
} else {
    echo "Terjadi kesalahan saat mengupdate produk";
    header('Location: ../editproduk.php?id=' . $id);
}
