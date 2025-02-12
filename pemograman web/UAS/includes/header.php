<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syuknet - Perusahaan Elektronik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/22cid/Syukrillah/UAS/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark header">
        <div class="container">
            <a class="navbar-brand" href="/22cid/Syukrillah/UAS/index.php">
                <img src="/22cid/Syukrillah/UAS/assets/images/logo.png" alt="Syuknet Logo" style="height: 40px;">
                Syuknet
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/22cid/Syukrillah/UAS/index.php">
                            <i class="fa fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/22cid/Syukrillah/UAS/pages/about.php">
                            <i class="fa fa-book"></i> Tentang Kami
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/22cid/Syukrillah/UAS/pages/structure.php">
                            <i class="fa fa-building"></i> Struktur Perusahaan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/22cid/Syukrillah/UAS/pages/contact.php">
                            <i class="fa fa-phone"></i> Hubungi Kami
                        </a>
                    </li>
                    <?php if (!isset($_SESSION['user_id'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/22cid/Syukrillah/UAS/pages/login.php">
                                <i class="fa fa-sign-in-alt"></i> Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/22cid/Syukrillah/UAS/pages/register.php">
                                <i class="fa fa-user-plus"></i> Register
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/22cid/Syukrillah/UAS/pages/dashboard.php">
                                <i class="fa fa-chart-line"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/22cid/Syukrillah/UAS/pages/profile.php">
                                <i class="fa fa-user"></i> Ubah Profil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/22cid/Syukrillah/UAS/pages/logout.php">
                                <i class="fa fa-sign-out-alt"></i> Logout
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>
