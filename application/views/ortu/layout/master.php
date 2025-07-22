<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= isset($title) ? $title : 'PAUD TPA Athahira' ?></title>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Favicon -->
    <link href="<?= base_url("assets/users/") ?>img/logo paud athahira.png" rel="icon">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url("assets/users/") ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url("assets/users/") ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url("assets/users/") ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url("assets/users/") ?>css/style.css" rel="stylesheet">
    <style>
        .hover-scale {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-scale:hover {
            transform: translateY(-5px) scale(1.03);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .custom-pink {
            background-color: #ff69b4 !important;
            color: #fff !important;
        }

        .custom-light {
            background-color: #ffe6e9 !important;
            color: #fff !important;
        }

        footer a:hover {
            color: #00BFFF !important;
            text-decoration: underline;
        }

        footer .btn-outline-light:hover {
            background-color: #00BFFF;
            border-color: #00BFFF;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border custom" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0 flex-nowrap">
        <a href="<?= base_url('ortu_dashboard') ?>" class="navbar-brand d-flex align-items-center px-2 px-lg-5">
            <img src="<?= base_url("assets/users/") ?>img/logo paud athahira.png" class="me-3" style="height: 40px;" alt="Logo">
            <h2 class="m-0 custom">
                PAUD TPA Athahira
            </h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#ortuNavCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="ortuNavCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?= site_url('ortu_dashboard') ?>" class="nav-item nav-link <?= menu_show(['ortu_dashboard']) ? 'active' : '' ?>">Home</a>
                <a href="<?= site_url('ortu_berita') ?>" class="nav-item nav-link <?= menu_show(['ortu_berita']) ? 'active' : '' ?>">Berita</a>
                <a href="<?= site_url('ortu_buku') ?>" class="nav-item nav-link <?= menu_show(['ortu_buku']) ? 'active' : '' ?>">Buku</a>
                <a href="<?= site_url('ortu_struktur_paud') ?>" class="nav-item nav-link <?= menu_show(['ortu_struktur_paud']) ? 'active' : '' ?>">Struktur</a>
                <a href="<?= site_url('ortu_kalender_akademik') ?>" class="nav-item nav-link <?= menu_show(['ortu_kalender_akademik']) ? 'active' : '' ?>">Kalender</a>
            </div>
            <a href="" class="btn btn-primary custom-btn custom-btn py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <main class="">
        <?= isset($content) ? $content : 'Kosong' ?>
    </main>

    <!-- Footer Start -->
    <footer class="bg-dark text-light pt-5 mt-5">
        <div class="container-fluid py-5">
            <div class="row gy-4 justify-content-around align-items-center text-center text-lg-start">
                <!-- Kontak -->
                <div class="col-6 col-lg-2">
                    <h5 class="text-white mb-3">Hubungi Kami</h5>
                    <p class="small mb-1"><i class="fa fa-map-marker-alt me-2"></i>48MP+V8M, Gg. Teratai, Sewon, Bantul</p>
                    <p class="small mb-1"><i class="fa fa-phone-alt me-2"></i>+62 812-1564-9033</p>
                    <div class="d-flex gap-2 mt-2 justify-content-center justify-content-lg-start">
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

                <!-- Deskripsi Singkat -->
                <div class="col-12 col-md-4 text-center">
                    <h4 class="text-white mb-3">Tentang Kami</h4>
                    <p class="small text-muted">
                        Lembaga Pelatihan dan Pendidikan yang berfokus pada pengembangan keterampilan praktis untuk siswa dari tingkat dasar hingga alumni.
                        Kami hadir untuk mendampingi perjalanan belajar Anda dengan metode inovatif dan lingkungan yang mendukung.
                    </p>
                </div>

                <!-- Quick Link -->
                <div class="col-6 col-lg-2">
                    <h5 class="text-white mb-3">Quick Link</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none small">Home</a></li>
                        <li><a href="#" class="text-light text-decoration-none small">Berita</a></li>
                        <li><a href="#" class="text-light text-decoration-none small">Struktur</a></li>
                        <li><a href="#" class="text-light text-decoration-none small">Kalender</a></li>
                    </ul>
                </div>
            </div>

            <!-- Footer Bawah -->
            <hr class="border-light mt-5">
            <div class="text-center small text-muted">
                &copy; 2025 <strong>PAUD TPA Athahira</strong>. All Rights Reserved. | Designed with ❤️ by Tim Kreatif
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary custom-btn btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url("assets/users/") ?>lib/wow/wow.min.js"></script>
    <script src="<?= base_url("assets/users/") ?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url("assets/users/") ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url("assets/users/") ?>lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url("assets/users/") ?>js/main.js"></script>

</body>

</html>