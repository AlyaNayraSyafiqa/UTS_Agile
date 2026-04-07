<?php
// index.php - Halaman Utama dengan Navigasi
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoTo Group - Ekosistem Digital Terdepan Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="logo.png" alt="GoTo Group" class="goto-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=ekosistem">Ekosistem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=investor">Investor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=karir">Karir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-nav-cta" href="index.php?page=kontak">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Dynamic Content -->
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    
    switch($page) {
        case 'tentang':
            include 'pages/tentang.php';
            break;
        case 'ekosistem':
            include 'pages/ekosistem.php';
            break;
        case 'investor':
            include 'pages/investor.php';
            break;
        case 'karir':
            include 'pages/karir.php';
            break;
        case 'kontak':
            include 'pages/kontak.php';
            break;
        default:
            include 'pages/home.php';
            break;
    }
    ?>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="footer-brand">
                        <img src="logo.png" alt="GoTo Group" class="goto-logo">
                        <p class="footer-desc">Membangun ekosistem digital untuk kemajuan Indonesia.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
                    <h6>Perusahaan</h6>
                    <ul class="footer-links">
                        <li><a href="index.php?page=tentang">Tentang</a></li>
                        <li><a href="index.php?page=ekosistem">Ekosistem</a></li>
                        <li><a href="index.php?page=investor">Investor</a></li>
                        <li><a href="index.php?page=karir">Karir</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 mb-4">
                    <h6>Layanan</h6>
                    <ul class="footer-links">
                        <li><a href="#">Gojek</a></li>
                        <li><a href="#">Tokopedia</a></li>
                        <li><a href="#">GoTo Financial</a></li>
                        <li><a href="#">Mitra Driver</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 mb-4">
                    <h6>Kontak</h6>
                    <div class="contact-info">
                        <p><i class="bi bi-geo-alt"></i> GoTo Building, Jakarta Selatan</p>
                        <p><i class="bi bi-envelope"></i> info@goto.com</p>
                        <p><i class="bi bi-telephone"></i> +62 21 5084 8888</p>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p>&copy; 2024 PT GoTo Gojek Tokopedia Tbk. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="social-links">
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>