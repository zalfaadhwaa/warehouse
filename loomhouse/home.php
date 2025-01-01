<!doctype html>
<html lang="en">

<?php session_start(); // Pastikan session dimulai ?>
<title>LoomHouse</title>

<head>
    <?php include('header.php'); ?>
    <link rel="stylesheet" href="main.css">

    <style>
        body {
            background-color: rgb(234, 210, 132);
        }
        img {
            display: block; /* Mengubah gambar menjadi elemen blok */
            width: 100%; /* Gambar akan mengisi lebar tampilan */
            max-width: 500px; /* Batasi lebar maksimum agar tetap proporsional */
            height: auto; /* Menjaga rasio aspek gambar */
            margin: 0 auto 20px; /* Memusatkan gambar dan memberi jarak bawah */
        }
        p {
            font-size: 15px;
            text-align: center;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: rgb(92, 65, 5); /* Warna latar belakang tombol */
            border: none;
            border-radius: 5px;
            text-decoration: none; /* Menghilangkan garis bawah */
            text-align: center;
            margin: 20px auto;
        }
        .btn:hover {
            background-color: rgb(92, 65, 5); /* Warna latar belakang saat hover */
        }
        .button-container {
            text-align: center; /* Memusatkan tombol secara horizontal */
            margin-top: 20px; /* Jarak atas untuk estetik */
        }
    </style>
</head>
<body>
    <?php include('navbar.php'); ?>

    <main role="main" class="container">
        <img src="logo.png" alt="Logo LoomHouse">
        <p><strong>LoomHouse</strong></p>
        <p>LoomHouse adalah aplikasi warehouse fashion yang berfokus pada pengelolaan stok baju, 
            celana, dan hijab. Kami menyediakan solusi efisien untuk memantau, mengelola, dan
            memastikan ketersediaan produk berkualitas tinggi bagi para pelanggan.
        </p>
        <div class="button-container">
            <a href="data.php" class="btn">Lihat Data</a> <!-- Tombol mengarah ke data.php -->
        </div>
    </main>
    
    <?php include('scripts.php') ?>

    <?php include('footer.php'); ?>
</body>

</html>