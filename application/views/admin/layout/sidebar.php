    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand px-4 py-3 m-0" href="<?= site_url('admin_dashboard') ?>">
                <img src="../../assets/admin/img/logo-ct-dark.png" class="navbar-brand-img" width="26" height="26" alt="main_logo">
                <span class="ms-1 text-sm text-dark">Athahira</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark <?= menu_show(['admin_dashboard']) ? 'active bg-gradient-dark text-white' : '' ?>" href="<?= site_url('admin_dashboard') ?>">
                        <i class="material-symbols-rounded opacity-5">dashboard</i>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark d-flex <?= toggle_class(['admin_users']) ?>"
                        data-bs-toggle="collapse"
                        href="#collapseUsers"
                        aria-expanded="<?= aria_expanded(['admin_users']) ?>"
                        aria-controls="collapseUsers">
                        <i class="material-symbols-rounded opacity-5">admin_panel_settings</i>
                        <span class="nav-link-text ms-1">Manajemen Pengguna</span>
                        <i class="material-symbols-rounded transition-arrow">keyboard_arrow_down</i>
                    </a>

                    <div class="collapse <?= collapse_state(['admin_users']) ?>" id="collapseUsers">
                        <ul class="nav flex-column">
                            <li><a class="nav-link text-dark" href="#">Data Pengguna</a></li>
                            <li><a class="nav-link text-dark" href="#">Tambah Pengguna</a></li>
                            <li><a class="nav-link text-dark" href="#">Edit Pengguna</a></li>
                            <li><a class="nav-link text-dark" href="#">Hapus Pengguna</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark d-flex <?= toggle_class(['admin_kepegawaian']) ?>"
                        data-bs-toggle="collapse"
                        href="#collapseKepegawaian"
                        aria-expanded="<?= aria_expanded(['admin_kepegawaian']) ?>"
                        aria-controls="collapseKepegawaian">
                        <i class="material-symbols-rounded opacity-5">article_person</i>
                        <span class="nav-link-text ms-1">Kepegawaian</span>
                        <i class="material-symbols-rounded transition-arrow">keyboard_arrow_down</i>
                    </a>

                    <div class="collapse <?= collapse_state(['admin_kepegawaian']) ?>" id="collapseKepegawaian">
                        <ul class="nav flex-column">
                            <li><a class="nav-link text-dark <?= menu_show(['admin_kepegawaian_index']) ? 'active bg-gradient-dark text-white' : '' ?>" href="<?= site_url('admin_kepegawaian_index') ?>">Data Pegawai</a></li>
                            <li><a class="nav-link text-dark" href="#">Cetak Data Pegawai</a></li>
                            <li><a class="nav-link text-dark" href="#">Presensi Pegawai</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark d-flex" href="#collapseKesiswaan" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseKesiswaan">
                        <i class="material-symbols-rounded opacity-5">school</i>
                        <span class="nav-link-text ms-1">Kesiswaan</span>
                        <i class="material-symbols-rounded transition-arrow">keyboard_arrow_down</i>
                    </a>
                    <div class="collapse" id="collapseKesiswaan">
                        <ul class="nav flex-column">
                            <li><a class="nav-link text-dark" href="#">Kelas Baby</a></li>
                            <li><a class="nav-link text-dark" href="#">Kelas PAUD</a></li>
                            <li><a class="nav-link text-dark" href="#">Tambah Siswa</a></li>
                            <li><a class="nav-link text-dark" href="#">Edit Siswa</a></li>
                            <li><a class="nav-link text-dark" href="#">Hapus Siswa</a></li>
                            <li><a class="nav-link text-dark" href="#">Cetak Kartu</a></li>
                            <li><a class="nav-link text-dark" href="#">Detail Siswa</a></li>
                            <li><a class="nav-link text-dark" href="#">Presensi Siswa</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="../pages/rtl.html">
                        <i class="material-symbols-rounded opacity-5">monitoring</i>
                        <span class="nav-link-text ms-1">Laporan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="../pages/notifications.html">
                        <i class="material-symbols-rounded opacity-5">archive</i>
                        <span class="nav-link-text ms-1">Arsip</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Account pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="../pages/profile.html">
                        <i class="material-symbols-rounded opacity-5">person</i>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="../pages/sign-in.html">
                        <i class="material-symbols-rounded opacity-5">login</i>
                        <span class="nav-link-text ms-1">Sign In</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="../pages/sign-up.html">
                        <i class="material-symbols-rounded opacity-5">assignment</i>
                        <span class="nav-link-text ms-1">Sign Up</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>