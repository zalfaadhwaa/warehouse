<!doctype html>
<html lang="en">
<title>Tambah Data</title>

<?php session_start(); // Pastikan session dimulai ?>

<head>
    <?php include('header.php'); ?>
    <!-- Menyertakan file CSS stok.css -->
    <link rel="stylesheet" href="main.css">

    <style>
        body {
            background-color: rgb(234, 210, 132);
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
    </style>
</head>

<body>
    <?php include('navbar.php'); ?>
<body>

<main role="main" class="container">


    <h1>Tambah Data Stok</h1>

    <!-- Pesan sukses jika ada -->
    <?php if (isset($_SESSION['success'])): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '<?php echo $_SESSION['success']; ?>',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'data.php'; // Arahkan ke halaman stok setelah menutup popup
                }
            });
        </script>
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>

    <form action="controller/stok.php?action=store" method="POST">
        <input type="text" id="barang" placeholder="Barang" required name="barang">
        
        <label for="kategori">Kategori</label>
        <select id="kategori" required name="kategori">
            <option value="" disabled selected>Pilih Kategori</option>
            <option value="Kaos">Kaos</option>
            <option value="Kemeja">Kemeja</option>
            <option value="Celana">Celana</option>
            <option value="Rok">Rok</option>
            <option value="Hijab">Hijab</option>
        </select>

        <label for="ukuran">Ukuran</label>
        <select id="ukuran" required name="ukuran">
            <option value="" disabled selected>Pilih Ukuran</option>
            <option value="XS">XS</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
            <option value="XXXL">XXXL</option>
        </select>

        <input type="number" id="stok" placeholder="Stok" min="1" max="1000" required name="stok">
        <button type="submit" class="btn">Simpan</button>
        <a href="data.php" class="btn">Kembali</a>
    </form>
</main>

    <?php include('scripts.php'); ?>

    <?php include('footer.php'); ?>
</body>

</html>