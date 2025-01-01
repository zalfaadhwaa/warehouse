<?php

include '../database/stok.php';

session_start(); // Pastikan session dimulai

$stok = new Stok();
$action = $_GET['action'];

if ($action == "store") {
    $stok->store(
        $_POST['barang'],
        $_POST['kategori'],
        $_POST['ukuran'],
        $_POST['stok']
    );
    $_SESSION['success'] = "Data berhasil ditambahkan!"; // Pesan sukses untuk store
    header("location:../add.php");
    exit;
} elseif ($action == "update") {
    $stok->update(
        $_POST['id'],
        $_POST['barang'],
        $_POST['kategori'],
        $_POST['ukuran'],
        $_POST['stok']
    );
    $_SESSION['success'] = "Data berhasil diperbarui!"; // Pesan sukses untuk update
    header("location:../edit.php?id=" . $_POST['id']); // Kembali ke halaman edit
    exit;
} elseif ($action == "delete") {
    $stok->delete($_GET['id']);
    header("location:../data.php");
    exit;
} elseif ($action == "get") {
    $data = $stok->getById($_GET['id']);
    echo json_encode($data);
    exit;
}

?>