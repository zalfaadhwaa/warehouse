<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">LoomHouse</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTop">
            <ul class="navbar-nav ml-auto">
                <?php 
                    // Mendapatkan nama file saat ini
                    $current_page = basename($_SERVER['PHP_SELF']); 
                    
                    // Cek apakah halaman saat ini adalah profil.php
                    if ($current_page === 'profil.php'): 
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Beranda</a> <!-- Tautan Home -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data.php">Data Stok</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="confirmLogout()">Logout</a>
                    </li>
                <?php elseif ($current_page !== 'login.php' && $current_page !== 'register.php'): ?>
                    <!-- Untuk halaman lain, tampilkan Profil dan Logout -->
                    <li class="nav-item">
                        <a class="nav-link" href="profil.php">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="confirmLogout()">Logout</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

<script>
    function confirmLogout() {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda akan keluar dari akun ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, keluar!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'logout.php'; // Arahkan ke logout.php jika dikonfirmasi
            }
        });
    }
</script>