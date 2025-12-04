.<?php
session_start();
require 'koneksi.php';

// cek login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// ambil data user
$query = mysqli_query($koneksi, "SELECT * FROM users WHERE id = '$user_id'");
$user = mysqli_fetch_assoc($query);

// jika user tidak ditemukan
if (!$user) {
    header("Location: login.php");
    exit();
}

// variabel PHP → Javascript
$nama = $user['username'];
$nim  = $user['nim'];
$contact = $user['contact'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySchedule - Jadwal Kuliah</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard.css">


</head>
<body>


<div class="sidebar d-flex flex-column">
    <div class="logo">
        <i class="bi bi-book"></i> MySchedule
    </div>

    <div class="menu-wrapper">
    <div class="user-info">
        <div class="d-flex align-items-center">
            <i class="bi bi-person-circle me-2" style="font-size: 24px;"></i>
            <div>
                <div class="fw-bold" id="userName"><?= $nama ?></div>
                <small id="userNim">NIM: <?= $nim ?></small>
            </div>
        </div>
    </div>
    

    <div class="nav-item active" onclick="showPage('home')">
        <i class="bi bi-house-door"></i> Home
    </div>
    <div class="nav-item" onclick="showPage('jadwal')">
        <i class="bi bi-journal-text"></i> Jadwal
    </div>
    <div class="nav-item" onclick="showPage('kalender')">
        <i class="bi bi-calendar3"></i> Kalender
    </div>
    <div class="nav-item" onclick="showPage('profil')">
        <i class="bi bi-person"></i> Profil
    </div>
    <div class="nav-item" onclick="showPage('about')">
        <i class="bi bi-info-circle"></i> About
    </div>
    </div>

    <form action="logout.php" method="POST">
        <button class="logout-btn">
            <i class="bi bi-box-arrow-right"></i> Logout
        </button>
    </form>
</div>



<!-- ===================== MAIN CONTENT ===================== -->
<div class="main-content">

    <!-- ====== HOME ====== -->
    <div id="homePage" class="page-section active">
        <div class="text-center mb-4">
            <h1 class="display-4 fw-bold text-white">
                Selamat Datang, <span id="welcomeName"><?= explode(" ", $nama)[0] ?></span>! 👋
            </h1>
            <p class="lead text-white">Kelola jadwal kuliah Anda dengan mudah</p>
        </div>

        <!-- Search -->
        <div class="search-box">
            <input type="text" id="searchInput" class="form-control"
                   placeholder="Cari jadwal..." oninput="handleSearch()">
            <i class="bi bi-search search-icon"></i>
        </div>

        <div id="searchResults" style="display:none;"></div>

        <!-- Jadwal hari ini -->
        <div id="todayScheduleSection">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h2>Jadwal Hari Ini (<span id="todayName"></span>)</h2>
                    <div id="todaySchedule"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- ====== PROFIL ====== -->
    <div id="profilPage" class="page-section">
        <div class="card shadow-lg" style="max-width:500px;margin:auto;">
            <div class="card-body text-center p-5">
                <div class="rounded-circle bg-success mb-3"
                    style="width:120px;height:120px;display:flex;align-items:center;justify-content:center;">
                    <i class="bi bi-person-fill text-white" style="font-size:60px;"></i>
                </div>
                <h2><?= $nama ?></h2>

                <div class="text-start mt-4">
                    <p><strong>NIM:</strong> <?= $nim ?></p>
                    <p><strong>Kontak:</strong> <?= $contact ?></p>
                    <p><strong>Status:</strong> <span class="badge bg-success">Aktif</span></p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- ====== JADWAL ====== -->
<div id="jadwalPage" class="page-section">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-white">Jadwal Kuliah</h1>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#jadwalModal" onclick="openAddForm()">
            <i class="bi bi-plus-lg"></i> Tambah Jadwal
        </button>
    </div>

    <div id="jadwalList"></div>
</div>
<!-- ====== KALENDER ====== -->
<div id="kalenderPage" class="page-section">
    <div class="card shadow-lg">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <button class="btn btn-outline-secondary" onclick="changeMonth(-1)">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <h2 class="mb-0" id="calendarTitle"></h2>
                <button class="btn btn-outline-secondary" onclick="changeMonth(1)">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>

            <div class="calendar-grid mb-3">
                <div class="text-center fw-bold py-2">Min</div>
                <div class="text-center fw-bold py-2">Sen</div>
                <div class="text-center fw-bold py-2">Sel</div>
                <div class="text-center fw-bold py-2">Rab</div>
                <div class="text-center fw-bold py-2">Kam</div>
                <div class="text-center fw-bold py-2">Jum</div>
                <div class="text-center fw-bold py-2">Sab</div>
            </div>

            <div id="calendarBody" class="calendar-grid"></div>
        </div>
    </div>
</div>
<!-- ====== ABOUT ====== -->
<div id="aboutPage" class="page-section">
    <div class="card shadow-lg mb-4">
        <div class="card-body p-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bold text-primary mb-3">
                    <i class="bi bi-book"></i> Tentang MySchedule
                </h1>
                <p class="lead text-muted">
                    Aplikasi pengelola jadwal kuliah yang membantu mahasiswa mengatur waktu belajar dengan mudah dan efisien
                </p>
            </div>

            <!-- fitur -->
            <div class="row mb-5">
                <div class="col-md-4 text-center mb-4">
                    <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="bi bi-calendar-check text-primary" style="font-size: 40px;"></i>
                    </div>
                    <h5 class="fw-bold">Kelola Jadwal</h5>
                    <p class="text-muted">Atur jadwal kuliah dengan mudah dan praktis</p>
                </div>

                <div class="col-md-4 text-center mb-4">
                    <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="bi bi-clock-history text-success" style="font-size: 40px;"></i>
                    </div>
                    <h5 class="fw-bold">Pengingat Otomatis</h5>
                    <p class="text-muted">Lihat jadwal hari ini secara otomatis</p>
                </div>

                <div class="col-md-4 text-center mb-4">
                    <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="bi bi-grid-3x3 text-warning" style="font-size: 40px;"></i>
                    </div>
                    <h5 class="fw-bold">Tampilan Kalender</h5>
                    <p class="text-muted">Visualisasi jadwal dalam bentuk kalender</p>
                </div>
            </div>

            <!-- Tim -->
            <h2 class="fw-bold text-center mb-4">
                <i class="bi bi-people"></i> Tim Pengembang
            </h2>

            <div class="row justify-content-center">
                <div class="col-md-4 text-center mb-4">
                    <img src="WhatsApp Image 2025-10-16 at 09.34.47_819542be.jpg" class="rounded-circle mb-3" style="width: 200px; height: 200px;">
                    <h5>Andi Facha H.A</h5>
                    <small class="text-muted">NIM: 3312501111</small>
                </div>

                <div class="col-md-4 text-center mb-4">
                    <img src="anggota.jpg" class="rounded-circle mb-3" style="width: 200px; height: 200px;">
                    <h5>Diar Dina</h5>
                    <small class="text-muted">NIM: 3312501109</small>
                </div>

                <div class="col-md-4 text-center mb-4">
                    <img src="anggota1.jpg" class="rounded-circle mb-3" style="width: 200px; height: 200px;">
                    <h5>Ita Lasari Purba</h5>
                    <small class="text-muted">NIM: 3312501112</small>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Form Jadwal - UPDATED -->
<div class="modal fade" id="jadwalModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="modalTitle">
                    <i class="bi bi-plus-circle"></i> Tambah Jadwal
                </h5>
                <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="jadwalForm">
                    <input type="hidden" id="editId">

                    <!-- Mata Kuliah -->
                    <div class="mb-3">
                        <label for="mataKuliah" class="form-label fw-bold">
                            <i class="bi bi-book"></i> Mata Kuliah
                        </label>
                        <input type="text" class="form-control" id="mataKuliah" 
                               placeholder="Contoh: Pemrograman Web" required>
                        <small class="text-muted">Nama mata kuliah yang ingin ditambahkan</small>
                    </div>

                    <!-- Hari -->
                    <div class="mb-3">
                        <label for="hari" class="form-label fw-bold">
                            <i class="bi bi-calendar3"></i> Hari
                        </label>
                        <select class="form-select" id="hari" required>
                            <option value="">-- Pilih Hari --</option>
                            <option>Senin</option>
                            <option>Selasa</option>
                            <option>Rabu</option>
                            <option>Kamis</option>
                            <option>Jumat</option>
                            <option>Sabtu</option>
                        </select>
                    </div>

                    <!-- Tanggal -->
                    <div class="mb-3">
                        <label for="tanggal" class="form-label fw-bold">
                            <i class="bi bi-calendar-event"></i> Tanggal
                        </label>
                        <input type="date" class="form-control" id="tanggal" required>
                        <small class="text-muted">Format: DD-MM-YYYY</small>
                    </div>

                    <!-- Jam Mulai & Jam Selesai -->
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="jamMulai" class="form-label fw-bold">
                                <i class="bi bi-clock"></i> Jam Mulai
                            </label>
                            <input type="time" class="form-control" id="jamMulai" required>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="jamSelesai" class="form-label fw-bold">
                                <i class="bi bi-clock-fill"></i> Jam Selesai
                            </label>
                            <input type="time" class="form-control" id="jamSelesai" required>
                        </div>
                    </div>

                    <!-- Ruangan -->
                    <div class="mb-3">
                        <label for="ruangan" class="form-label fw-bold">
                            <i class="bi bi-door-closed"></i> Ruangan
                        </label>
                        <input type="text" class="form-control" id="ruangan" 
                               placeholder="Contoh: Ruang 101 Gedung A" required>
                    </div>

                    <!-- Dosen -->
                    <div class="mb-3">
                        <label for="dosen" class="form-label fw-bold">
                            <i class="bi bi-person-badge"></i> Dosen
                        </label>
                        <input type="text" class="form-control" id="dosen" 
                               placeholder="Nama dosen pengajar" required>
                    </div>

                    <!-- Catatan (Optional) -->
                    <div class="mb-3">
                        <label for="catatan" class="form-label fw-bold">
                            <i class="bi bi-sticky"></i> Catatan
                        </label>
                        <textarea class="form-control" id="catatan" rows="3" 
                                  placeholder="Tambahkan catatan penting..."></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="bi bi-x-circle"></i> Batal
                </button>
                <button type="button" class="btn btn-success" onclick="saveJadwal()">
                    <i class="bi bi-check-circle"></i> Simpan Jadwal
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail Jadwal - untuk menampilkan detail & confirm delete -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="detailModalLabel">
                    <i class="bi bi-info-circle"></i> Detail Jadwal
                </h5>
                <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="detailModalBody">
                <!-- Konten akan diisi dengan JavaScript -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

    <footer class="footer">
    <p>© 2025 MySchedule | Tentang Kami: Aplikasi pengelola jadwal kuliah yang membantu mahasiswa mengatur waktu belajar dengan mudah.</p>
    </footer>

    <!-- HALAMAN JADWAL, KALENDER, ABOUT — sama seperti HTML kamu  (tidak perlu diubah) -->
    <!-- Tinggal copy dari file dashboard.html dan paste di sini -->
</div>



<!-- ===================== SCRIPT ===================== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/dashboard.js"></script>

</body>
</html>
