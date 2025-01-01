<!doctype html>
<html lang="en">
<title>Edit Data Stok</title>

<?php session_start(); ?>
<?php include('database/stok.php'); ?>

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

    <main role="main" class="container">
        
        <?php
        $data = new Stok();
        $item = null;

        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $item = $data->getById($id);
        }

        if (!$item) {
            echo "<p>Data tidak ditemukan.</p>";
            exit();
        }
        ?>

        <h1>Edit Data Stok</h1>

        <!-- Pesan jika berhasil diupdate -->
        <?php if (isset($_SESSION['success'])): ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '<?php echo $_SESSION['success']; ?>',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'data.php?id=<?php echo $id; ?>'; // Arahkan kembali ke halaman edit
                    }
                });
                <?php unset($_SESSION['success']); ?> // Hapus pesan setelah ditampilkan
            </script>
        <?php endif; ?>

        <form id="editForm" action="controller/stok.php?action=update" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($item['id']); ?>">
            <input type="text" name="barang" value="<?php echo htmlspecialchars($item['barang']); ?>" required>
            
            <label for="kategori">Kategori</label>
            <select name="kategori" required>
                <option value="Kaos" <?php echo $item['kategori'] == 'Kaos' ? 'selected' : ''; ?>>Kaos</option>
                <option value="Kemeja" <?php echo $item['kategori'] == 'Kemeja' ? 'selected' : ''; ?>>Kemeja</option>
                <option value="Celana" <?php echo $item['kategori'] == 'Celana' ? 'selected' : ''; ?>>Celana</option>
                <option value="Rok" <?php echo $item['kategori'] == 'Rok' ? 'selected' : ''; ?>>Rok</option>
                <option value="Hijab" <?php echo $item['kategori'] == 'Hijab' ? 'selected' : ''; ?>>Hijab</option>
            </select>

            <label for="ukuran">Ukuran</label>
            <select name="ukuran" required>
                <option value="XS" <?php echo $item['ukuran'] == 'XS' ? 'selected' : ''; ?>>XS</option>
                <option value="S" <?php echo $item['ukuran'] == 'S' ? 'selected' : ''; ?>>S</option>
                <option value="M" <?php echo $item['ukuran'] == 'M' ? 'selected' : ''; ?>>M</option>
                <option value="L" <?php echo $item['ukuran'] == 'L' ? 'selected' : ''; ?>>L</option>
                <option value="XL" <?php echo $item['ukuran'] == 'XL' ? 'selected' : ''; ?>>XL</option>
                <option value="XXL" <?php echo $item['ukuran'] == 'XXL' ? 'selected' : ''; ?>>XXL</option>
                <option value="XXXL" <?php echo $item['ukuran'] == 'XXXL' ? 'selected' : ''; ?>>XXXL</option>
            </select>

            <input type="number" name="stok" value="<?php echo htmlspecialchars($item['stok']); ?>" required min="1" max="1000">

            <a href="#" class="btn" onclick="document.getElementById('editForm').submit();">Update</a> <!-- Tombol Update sebagai tautan -->
            <a href="data.php" class="btn">Kembali</a>
        </form>
    </main>

    <?php include('scripts.php'); ?>
    
    <?php include('footer.php'); ?>
</body>

</html>