<!doctype html>
<html lang="en">
<title>Data Stok</title>

<head>
    <?php include('header.php'); ?>
    <link rel="stylesheet" href="main.css">
    <style>
        body {
            background-color: rgb(234, 210, 132);
        }
        .btn-brown {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: rgb(92, 65, 5);
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin: 20px auto;
        }
        .btn-brown:hover {
            background-color: rgb(72, 45, 5);
        }
        .search-container {
            margin: 20px 0;
            text-align: right; /* Posisikan ke kanan */
        }
        .search-input {
            padding: 5px; /* Padding lebih kecil */
            font-size: 14px; /* Ukuran font lebih kecil */
            width: 150px; /* Lebar input lebih kecil */
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .category-table {
            margin-top: 30px;
        }
        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>

<body>
    <?php include('navbar.php'); ?>

    <main role="main" class="container">
        <?php 
            include('database/stok.php');
            $data = new Stok();
            $stokData = $data->getAll();
        ?>

        <h1>Data Stok PT Projek Abadi</h1>
        <hr class="separator">

        <?php 
            // Daftar kategori
            $categories = ['Kaos', 'Kemeja', 'Celana', 'Rok', 'Hijab'];
            foreach ($categories as $category): 
                $filteredData = array_filter($stokData, function($item) use ($category) {
                    return $item['kategori'] === $category;
                });
        ?>
            <div class="category-table">
                <div class="table-header">
                    <h2><?php echo htmlspecialchars($category); ?></h2>
                    <div class="search-container">
                        <input type="text" class="search-input" placeholder="Cari..." onkeyup="searchFunction(this, '<?php echo $category; ?>')">
                    </div>
                </div>
                <?php if (!empty($filteredData)): ?>
                    <table class="table table-bordered mt-4" id="<?php echo strtolower($category); ?>Table">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Ukuran</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($filteredData as $row): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($row['barang']); ?></td>
                                    <td><?php echo htmlspecialchars($row['kategori']); ?></td>
                                    <td><?php echo htmlspecialchars($row['ukuran']); ?></td>
                                    <td><?php echo htmlspecialchars($row['stok']); ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="#" class="btn btn-info text-white" onclick="editStok(<?php echo htmlspecialchars($row['id']); ?>)">
                                                <i class='bx bx-pencil'></i>
                                            </a>
                                            <a href="#" class="btn btn-danger text-white" onclick="deleteStok(<?php echo htmlspecialchars($row['id']); ?>)">
                                                <i class='bx bx-trash'></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p>Data untuk kategori <?php echo htmlspecialchars($category); ?> tidak ditemukan.</p>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>

        <!-- Kontainer untuk tombol -->
        <div class="button-container">
            <a href="add.php" class="btn-brown">Tambah Data</a>
            <a href="home.php" class="btn-brown">Beranda</a>
        </div>
    </main>

    <script>
        function deleteStok(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `controller/stok.php?action=delete&id=${id}`;
                }
            });
        }

        function editStok(id) {
            window.location.href = `edit.php?id=${id}`;
        }

        function searchFunction(input, category) {
            const filter = input.value.toLowerCase();
            const table = document.getElementById(category.toLowerCase() + 'Table');
            const tr = table.getElementsByTagName('tr');

            for (let i = 1; i < tr.length; i++) {
                const td = tr[i].getElementsByTagName('td')[0]; // Cek hanya kolom nama barang
                if (td) {
                    const txtValue = td.textContent || td.innerText;
                    tr[i].style.display = txtValue.toLowerCase().indexOf(filter) > -1 ? '' : 'none';
                }
            }
        }
    </script>

    <?php include('scripts.php'); ?>
</body>
    
</html>