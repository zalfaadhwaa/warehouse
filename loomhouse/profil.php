<!doctype html>
<html lang="en">
<title>Profil</title>

<head>
    <?php 
    session_start(); // Memulai session
    
    // Cek apakah pengguna sudah login
    if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
        header("location: login.php"); // Arahkan ke halaman login jika belum login
        exit;
    }

    include('header.php'); 
    ?>

    <style>
        body {
            background-color: rgb(234, 210, 132);
        }
    </style>
</head>

<body>
    <?php include('navbar.php'); ?>

    <main role="main" class="">
        
        <!-- Menyertakan file CSS stok.css -->
        <link rel="stylesheet" href="main.css">

        <div class="container mt-5">
                <div class="col-12">
                    <h1>Profil Pengguna</h1>
                    <p><strong>Nama:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?></p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email']); ?></p>
                </div>
        </div>
    </main>

    <?php include('scripts.php'); ?>
        
    <?php include('footer.php'); ?>
</body>
</html>