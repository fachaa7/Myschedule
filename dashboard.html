<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySchedule - Jadwal Kuliah</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        body {
            background: #E2C892; /* bagian boddy bacgorund */
            min-height: 100vh; /* untuk full satu layar */
        }

        .sidebar {
            background: linear-gradient(180deg, #845512 0%, #a97124 100%);
            min-height: 100vh;
            color: white; /* teks wanra putih */
            position: fixed; /* agar posisinya tetap di samping layar */
            width: 250px; /* labar tinggi layar */
            left: 0;
            top: 0;
            padding: 20px;
            box-shadow: 4px 0 20px rgba(0,0,0,0.1); /* agar ada shadow */
        }

        .main-content {
            margin-left: 250px; /* supaya ke geser sejauh 250px */
            padding: 30px; /* supaya tidak nempel ke tepi */
        }

        .nav-item {
            padding: 12px 16px;
            border-radius: 10px;
            color: white;
            text-decoration: none;
            display: flex; /* agar ikon nya sejajar */
            align-items: center;
            gap: 10px;
            margin-bottom: 8px;
            transition: all 0.3s; /* supaya ada efek shadow */
            cursor: pointer; /* pointer */
        }

        .nav-item:hover {
            background: rgba(255,255,255,0.2);
            color: white;
        }

        .nav-item.active {
            background: white;
            color: #845512;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            color: white;
        }

        .user-info { /* bagian info sidebar  */
            background: rgba(255,255,255,0.1);
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .user-info small {
            opacity: 0.9;
        }

        .footer {
            background-color: #8B5E34;
            color: white;
            text-align: center;
            padding: 15px 0;
            font-size: 14px;
            position: fixed;
            bottom: 0;
            left: 250px; /* biar tidak ketutup sidebar */
            width: calc(100% - 250px); /* sisakan ruang sidebar */
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);
            z-index: 999;
        }


        .page-section { /* satu halaman tampil sekaliguas  */
            display: none;
        }

        .page-section.active {
            display: block;
        }

       .search-box { /* untuk search bar */
            position: relative;
            margin-bottom: 30px;
        }

        .search-box input {
            border-radius: 50px;
            padding: 15px 50px 15px 20px;
            border: 2px solid #845512;
            font-size: 16px;
            transition: all 0.3s;
        }

        .search-box input:focus {
            box-shadow: 0 0 15px rgba(132, 85, 18, 0.3);
            border-color: #845512;
        }

        .search-box .search-icon {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #845512;
            font-size: 20px;
        }

        .search-results {
            margin-top: 20px;
        }

        .search-item {
            background: white;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        .search-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 20px rgba(132, 85, 18, 0.2);
        }

        .highlight {
            background-color: #ffeb3b; 
            font-weight: 600;          
        }

        .calendar-grid { /* bagian calender  */
            display: grid;
            grid-template-columns: repeat(7, 1fr); /* buat 7 kolom */
            gap: 10px;
        }

        .calendar-day { /* kalenderp per hari */
            min-height: 120px;
            padding: 8px;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            background: white;
        }
        .calendar-day.today {  /* kalender hari ini */
            background: white; 
            border: 1px solid #dee2e6; 
        }

        .calendar-day.other-month { /* kalender di hari bulan lain */
            background: #f8f9fa;
            color: #6c757d;
        }

        .calendar-day.has-event { /* kalender yg punya event atau jadwal */
            background: #E2C892;
            border: 2px solid #845512;
        }

        .calendar-event {  /* kalender yang ada event atau jadwal */
            background: #845512;
            color: white;
            padding: 4px 6px;
            border-radius: 4px;
            font-size: 12px;
            margin-bottom: 4px;
            cursor: move;
            position: relative;
        }

        .calendar-event:hover .event-actions {
            display: flex;
        }

        .event-actions {
            display: none;
            gap: 4px;
            position: absolute;
            right: 4px;
            top: 2px;
        }

        .event-actions button {
            padding: 2px 4px;
            font-size: 10px;
        }

        .more-events {
            background: #ffbe5c;
            color: white;
            padding: 4px;
            border-radius: 4px;
            font-size: 11px;
            text-align: center;
            cursor: pointer;
        }
        
        

        .logout-btn { /* tombol logout */
            margin-top: auto;
            padding: 12px 14px;
            border-radius: 8px;
            cursor: pointer;
            color: white;
            border: none;
            background: #dc3545;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logout-btn:hover { /* suapya bisa jreng */
            box-shadow: 0 0 20px;
            transform: scale(1.05);
        }

        @keyframes popIn { /* untuk animasi muncul */
            0% {
                transform: scale(0.7) translateY(20px);
                opacity: 0;
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes fadeOut { /* buat animasinya ilang dan dihapus */
            from { opacity: 1; transform: scale(1); }
            to { opacity: 0; transform: scale(0.5); height: 0; margin: 0; padding: 0; }
        }

        .fade-out {
            animation: fadeOut 0.8s ease forwards;
        }

        .modal.show .modal-dialog {
            animation: popIn 0.3s ease-out;
        }

        @media (max-width: 768px) { /* saat layar hp */
            .sidebar { /* sidebar pindah kebawah */
                width: 100%;
                min-height: auto;
                position: fixed;
                bottom: 0;
                top: auto;
                padding: 10px;
                display: flex;
                justify-content: space-around;
                z-index: 1000;
            }

            .main-content { /*  */
                margin-left: 0;
                padding: 20px;
                padding-bottom: 80px;
            }

            .logo, .logout-btn, .user-info {
                display: none;
            }

            .nav-item {
                flex-direction: column;
                padding: 8px;
                margin: 0;
                font-size: 12px;
            }

            .footer {
                left: 0;
                width: 100%;
                position: static; /* biar tidak menimpa sidebar bawah di HP */
                padding: 10px;
                font-size: 12px;
            }

        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column">
        <div class="logo">
            <i class="bi bi-book"></i> MySchedule
        </div>
        
        <div class="user-info">
            <div class="d-flex align-items-center">
                <i class="bi bi-person-circle me-2" style="font-size: 24px;"></i>
                <div>
                    <div class="fw-bold" id="userName">Siswa</div>
                    <small id="userNim">NIM: -</small>
                </div>
            </div>
        </div>
        
        <div class="nav-item active" onclick="showPage('home')">
            <i class="bi bi-house-door"></i>
            <span>Home</span>
        </div>
        <div class="nav-item" onclick="showPage('jadwal')">
            <i class="bi bi-journal-text"></i>
            <span>Jadwal</span>
        </div>
        <div class="nav-item" onclick="showPage('kalender')">
            <i class="bi bi-calendar3"></i>
            <span>Kalender</span>
        </div>
        <div class="nav-item" onclick="showPage('profil')">
            <i class="bi bi-person"></i>
            <span>Profil</span>
        </div>
        <div class="nav-item" onclick="showPage('about')">
            <i class="bi bi-info-circle"></i>
            <span>About</span>
        </div>
        <button class="logout-btn" onclick="logout()">
            <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span>
        </button>
    </div>

    <!-- Main Content -->
    <div class="main-content">

    <!-- Home Page -->
        <div id="homePage" class="page-section active">
            <div class="text-center mb-4">
                <h1 class="display-4 fw-bold text-white">Selamat Datang, <span id="welcomeName">Siswa</span>! 👋</h1>
                <p class="lead text-white">Kelola jadwal kuliah Anda dengan mudah</p>
            </div>
    <!-- Search Box -->
        <div class="search-box">
            <input type="text" 
                    class="form-control" 
                    id="searchInput" 
                    placeholder="Cari jadwal kuliah atau dosen..."
                    oninput="handleSearch()">
            <i class="bi bi-search search-icon"></i>
        </div>

    <!-- Search Results -->
        <div id="searchResults" class="search-results" style="display: none;">
            <h4 class="text-white mb-3">Hasil Pencarian</h4>
            <div id="searchResultsContent"></div>
        </div>

    <!-- Today Schedule Section -->
        <div id="todayScheduleSection">
            <div class="card shadow-lg">
                <div class="card-body p-4">
                    <h2 class="card-title mb-4">Jadwal Hari Ini (<span id="todayName"></span>)</h2>
                    <div id="todaySchedule"></div>
                </div>
            </div>
        </div>
            </div>
       
        <!-- Jadwal Page -->
        <div id="jadwalPage" class="page-section">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="text-white">Jadwal Kuliah</h1>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#jadwalModal" onclick="openAddForm()">
                    <i class="bi bi-plus-lg"></i> Tambah Jadwal
                </button>
            </div>
            <div id="jadwalList"></div>
        </div>

        <!-- Kalender Page -->
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

                    <div class="alert alert-info mt-4">
                        <strong>💡 Tip:</strong> Drag jadwal ke hari lain untuk mengubahnya, klik "+N" untuk melihat semua jadwal
                    </div>
                </div>
            </div>
        </div>

        <!-- Profil Page -->
        <div id="profilPage" class="page-section">
            <div class="card shadow-lg" style="max-width: 500px; margin: 0 auto;">
                <div class="card-body p-5 text-center">
                    <div class="bg-success rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 120px; height: 120px;">
                        <i class="bi bi-person-fill text-white" style="font-size: 60px;"></i>
                    </div>
                    <h2 class="mb-3" id="profilNama">-</h2>
                    <div class="text-start">
                        <div class="mb-3">
                            <label class="text-muted">NIM</label>
                            <h5 id="profilNim">-</h5>
                        </div>
                        <div class="mb-3">
                            <label class="text-muted">Status</label>
                            <h5><span class="badge bg-success">Aktif</span></h5>
                        </div>
                        <div class="mb-3">
                            <label class="text-muted">Login Terakhir</label>
                            <h6 id="profilLoginTime">-</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <!-- About Page -->
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

                    <hr class="my-5">

                    <div class="text-center mb-4">
                        <h2 class="fw-bold mb-4">
                            <i class="bi bi-people"></i> Tim Pengembang
                        </h2>
                        <p class="text-muted">Dikembangkan oleh mahasiswa untuk mahasiswa</p>
                    </div>

                    <div class="row justify-content-center text-center">
                        <div class="col-md-4 col-lg-3 mb-4">
                            <div class="card h-100 text-center border-0 shadow-sm">
                            <div class="card-body">
                                <img src="WhatsApp Image 2025-10-16 at 09.34.47_819542be.jpg" alt="Foto Anggota 1" class="rounded-circle mb-3" style="width: 200px; height: 200px; object-fit: cover; border: 3px solid #198754;">
                                <h5 class="fw-bold mb-2">Andi Facha H.A</h5>
                                <small class="text-muted">NIM: 3312501111</small>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3 mb-4">
                            <div class="card h-100 text-center border-0 shadow-sm">
                            <div class="card-body">
                                <img src="anggota.jpg" alt="Foto Anggota 2" class="rounded-circle mb-3" style="width: 200px; height: 200px; object-fit: cover; border: 3px solid #198754;">
                                <h5 class="fw-bold mb-2">Diar Dina</h5>
                                <small class="text-muted">NIM: 3312501109</small>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3 mb-4">
                            <div class="card h-100 text-center border-0 shadow-sm">
                            <div class="card-body">
                                <img src="anggota1.jpg" alt="Foto Anggota 3" class="rounded-circle mb-3" style="width: 200px; height: 200px; object-fit: cover; border: 3px solid #ffc107;">
                                <h5 class="fw-bold mb-2">Ita Lasari Purba</h5>
                                <small class="text-muted">NIM: 3312501112</small>
                            </div>
                            </div>
                        </div>
                        </div>


                    <div class="alert alert-info mt-4">
                        <h5 class="alert-heading">
                            <i class="bi bi-info-circle"></i> Informasi Kontak
                        </h5>
                        <p class="mb-0">
                            📧 Email: andifacha956@gmail.com<br>
                            📱 WhatsApp: +62 821-7794-1436<br>
                            🌐 Website: Localhost
                        </p>
                    </div>
                </div>
            </div>
        </div>

    

    <!-- Modal Form Jadwal -->
    <div class="modal fade" id="jadwalModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Tambah Jadwal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="jadwalForm">
                        <input type="hidden" id="editId">
                        
                        <div class="mb-3">
                            <label class="form-label">Mata Kuliah <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="mataKuliah" placeholder="Wajib diisi">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Hari</label>
                            <select class="form-select" id="hari">
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="text" class="form-control" id="tanggal" placeholder="(DD-MM-YYYY)">
                        </div>

                        <div class="row">
                            <div class="col-6 mb-3">
                                <label class="form-label">Jam Mulai</label>
                                <input type="time" class="form-control" id="jamMulai">
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label">Jam Selesai</label>
                                <input type="time" class="form-control" id="jamSelesai">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Ruangan</label>
                            <input type="text" class="form-control" id="ruangan" placeholder="(GU-701)">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Dosen</label>
                            <input type="text" class="form-control" id="dosen" placeholder="(Pak Nizam)">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-success" onclick="saveJadwal()">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail Jadwal -->
    <div class="modal fade" id="detailModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Jadwal Hari Ini</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="detailModalBody"></div>
            </div>
        </div>
    </div>
    <footer class="footer">
    <p>© 2025 MySchedule | Tentang Kami: Aplikasi pengelola jadwal kuliah yang membantu mahasiswa mengatur waktu belajar dengan mudah.</p>
    </footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Cek login - support multiple methods
        let loginData = null;
        
        // Method 1: From window.opener (new window)
        if (window.opener && window.opener.tempLoginData) {
            loginData = JSON.parse(window.opener.tempLoginData);
        }
        // Method 2: From same window (redirect)
        else if (window.tempLoginData) {
            loginData = JSON.parse(window.tempLoginData);
        }

        else if (sessionStorage.getItem('loginData'))
            loginData = JSON.parse(sessionStorage.getItem('loginData'))

        else if (localStorage.getItem('loginData'))
            loginData = JSON.parse(localStorage.getItem('loginData'));


        // Redirect ke login jika belum login atau bukan siswa
        if (!loginData || loginData.role !== 'siswa') {
            alert('Silakan login terlebih dahulu!');
            window.location.href = 'login.html';
        }

        // Set informasi user di sidebar
        document.getElementById('userName').textContent = loginData.nama;
        document.getElementById('userNim').textContent = 'NIM: ' + loginData.nim;
        
        // Set nama pertama di welcome message
        document.getElementById('welcomeName').textContent = loginData.nama.split(' ')[0];
        
        // Set informasi di halaman profil
        document.getElementById('profilNama').textContent = loginData.nama;
        document.getElementById('profilNim').textContent = loginData.nim;
        
        // Set waktu login
        const loginTime = new Date(loginData.loginTime);
        document.getElementById('profilLoginTime').textContent = loginTime.toLocaleString('id-ID');

        // Data
        let jadwalList = [
            {
                id: 1, 
                mataKuliah: 'Pemrograman Web', 
                hari: 'Kamis', 
                tanggal: '23-10-2025',
                jamMulai: '08:00', 
                jamSelesai: '10:00', 
                ruangan: 'Lab A101', 
                dosen: 'Dr. Budi Santoso'
            }
        ];

        let currentMonth = new Date().getMonth();
        let currentYear = new Date().getFullYear();
        let draggedItem = null;

        const hariMap = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const monthNames = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
                           'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        // Search Function - TAMBAHKAN INI
        function handleSearch() {
            const query = document.getElementById('searchInput').value.toLowerCase().trim();
            const resultsDiv = document.getElementById('searchResults');
            const resultsContent = document.getElementById('searchResultsContent');
            const todaySection = document.getElementById('todayScheduleSection');

            if (query === '') {
                resultsDiv.style.display = 'none';
                todaySection.style.display = 'block';
                return;
            }

            // Sembunyikan jadwal hari ini
            todaySection.style.display = 'none';

            const results = jadwalList.filter(j => 
                j.mataKuliah.toLowerCase().includes(query) ||
                j.dosen.toLowerCase().includes(query) ||
                j.hari.toLowerCase().includes(query) ||
                j.ruangan.toLowerCase().includes(query)
            );

            if (results.length === 0) {
                resultsContent.innerHTML = '<div class="alert alert-warning">Tidak ada hasil ditemukan untuk "' + query + '"</div>';
                resultsDiv.style.display = 'block';
                return;
            }

            // Function untuk highlight text
            const highlightText = (text, query) => {
                const regex = new RegExp(`(${query})`, 'gi');
                return text.replace(regex, '<span class="highlight">$1</span>');
            };

            const html = results.map(j => `
                <div class="search-item">
                    <h5>${highlightText(j.mataKuliah, query)}</h5>
                    <p class="mb-1 text-muted"><i class="bi bi-calendar-check"></i> ${highlightText(j.hari, query)} (${j.tanggal}) | ${j.jamMulai} - ${j.jamSelesai}</p>
                    <p class="mb-2 text-muted"><i class="bi bi-door-open"></i> ${highlightText(j.ruangan, query)} | <i class="bi bi-person-badge"></i> ${highlightText(j.dosen, query)}</p>
                    <button class="btn btn-primary btn-sm me-2" onclick='editJadwal(${JSON.stringify(j)})'>
                        <i class="bi bi-pencil"></i> Edit
                    </button>
                    <button class="btn btn-danger btn-sm" onclick="deleteJadwal(${j.id})">
                        <i class="bi bi-trash"></i> Hapus
                    </button>
                </div>
            `).join('');

            resultsContent.innerHTML = html;
            resultsDiv.style.display = 'block';
        }


        // Navigation
        function showPage(page) {
            document.querySelectorAll('.page-section').forEach(p => p.classList.remove('active'));
            document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));
            
            document.getElementById(page + 'Page').classList.add('active');
            event.currentTarget.classList.add('active');

           if (page === 'home') {
            document.getElementById('searchInput').value = '';
            document.getElementById('searchResults').style.display = 'none';
            document.getElementById('todayScheduleSection').style.display = 'block';
            renderHome(); 
            if (page === 'jadwal') renderJadwal();
            if (page === 'kalender') renderCalendar();
        }}

        // Home Page
        function renderHome() {
            const today = new Date();
            const todayName = hariMap[today.getDay()];
            document.getElementById('todayName').textContent = todayName;

            const todaySchedule = jadwalList.filter(j => j.hari === todayName);
            const html = todaySchedule.length > 0 ? todaySchedule.map(j => `
                <div class="alert alert-success d-flex align-items-center home-item" id="jadwal-${j.id}">
                    <input type="checkbox" 
                        class="form-check-input me-3 home-checkbox" 
                        style="width: 24px; height: 24px;"
                        onchange="fadeOutAndDelete(${j.id})">
                    <div class="flex-grow-1">
                        <h5 class="alert-heading mb-1">${j.mataKuliah}</h5>
                        <p class="mb-0">🕐 ${j.jamMulai} - ${j.jamSelesai}</p>
                        <small>📍 ${j.ruangan} | 👨‍🏫 ${j.dosen}</small>
                    </div>
                </div>
            `).join('') : '<p class="text-muted text-center">Tidak ada jadwal untuk hari ini 🎉</p>';

            document.getElementById('todaySchedule').innerHTML = html;
        }

        function fadeOutAndDelete(id) {
            const item = document.getElementById(`jadwal-${id}`);
            if (item) {
                item.classList.add('fade-out');
                setTimeout(() => deleteJadwal(id), 500);
            }
        }

        // Jadwal Page
        function renderJadwal() {
            const html = jadwalList.map(j => `
                <div class="card mb-3 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title mb-1">${j.mataKuliah}</h5>
                            <p class="card-text text-muted mb-0">
                                ${j.hari} (${j.tanggal}) | ${j.jamMulai} - ${j.jamSelesai} | ${j.ruangan}
                            </p>
                            <small class="text-muted">Dosen: ${j.dosen}</small>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-primary btn-sm" onclick='editJadwal(${JSON.stringify(j)})'>
                                <i class="bi bi-pencil"></i>
                            </button>
                            <button class="btn btn-danger btn-sm" onclick="deleteJadwal(${j.id})">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            `).join('');

            document.getElementById('jadwalList').innerHTML = html || '<p class="text-muted text-center">Belum ada jadwal</p>';
        }

        // Calendar
        function renderCalendar() {
            document.getElementById('calendarTitle').textContent = `${monthNames[currentMonth]} ${currentYear}`;

            const firstDay = new Date(currentYear, currentMonth, 1).getDay();
            const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
            const daysInPrevMonth = new Date(currentYear, currentMonth, 0).getDate();

            let html = '';
            const today = new Date();

            // Previous month days
            for (let i = firstDay - 1; i >= 0; i--) {
                html += `<div class="calendar-day other-month">${daysInPrevMonth - i}</div>`;
            }

            // Current month days
            for (let date = 1; date <= daysInMonth; date++) {
                const dayOfWeek = new Date(currentYear, currentMonth, date).getDay();
                const hariName = hariMap[dayOfWeek];

                const formattedDate = `${date.toString().padStart(2, '0')}-${(currentMonth + 1).toString().padStart(2, '0')}-${currentYear}`;
                
                const jadwalHari = jadwalList.filter(j => j.tanggal === formattedDate);
                const hasEvent = jadwalHari.length > 0 ? "has-event" : "";
                
                const isToday = date === today.getDate() && 
                               currentMonth === today.getMonth() && 
                               currentYear === today.getFullYear();

                const jadwalHTML = jadwalHari.slice(0, 1).map(j => `
                        <div class="calendar-event" draggable="true" 
                            ondragstart="handleDragStart(event, ${j.id})"
                            title="${j.mataKuliah} - ${j.jamMulai}">
                            ${j.mataKuliah}
                            <div class="event-actions">
                                <button class="btn btn-primary btn-sm" onclick='editJadwal(${JSON.stringify(j)})'>
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="deleteJadwal(${j.id})">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                        </div>
                    `).join('');

                const moreHTML = jadwalHari.length > 1 ? 
                    `<div class="more-events" onclick='showAllJadwal(${JSON.stringify(jadwalHari)})'>
                        +${jadwalHari.length - 1} <i class="bi bi-chevron-down"></i>
                    </div>` : '';

                html += `
                    <div class="calendar-day ${isToday ? 'today' : ''} ${hasEvent}" 
                        data-date="${date}"
                        ondragover="event.preventDefault()" 
                        ondrop="handleDrop(event, ${date})">
                        <div class="fw-bold mb-2">${date}</div>
                        ${jadwalHTML}
                        ${moreHTML}
                    </div>
                `;
            }

            // Next month days
            const remaining = 42 - (firstDay + daysInMonth);
            for (let date = 1; date <= remaining; date++) {
                html += `<div class="calendar-day other-month">${date}</div>`;
            }

            document.getElementById('calendarBody').innerHTML = html;
        }

        function changeMonth(direction) {
            currentMonth += direction;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            } else if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            renderCalendar();
        }

        function handleDragStart(event, id) {
            draggedItem = jadwalList.find(j => j.id === id);
        }

        function handleDrop(event, targetDate) {
            if (draggedItem) {
                const dayOfWeek = new Date(currentYear, currentMonth, targetDate).getDay();
                const targetHari = hariMap[dayOfWeek];
                
                const targetTanggal = `${targetDate.toString().padStart(2, '0')}-${(currentMonth + 1).toString().padStart(2, '0')}-${currentYear}`;
                
                jadwalList = jadwalList.map(j => 
                    j.id === draggedItem.id ? { ...j, hari: targetHari, tanggal: targetTanggal } : j
                );
                draggedItem = null;
                renderCalendar();
                renderHome();
            }
        }

        function showAllJadwal(jadwalArray) {
            const html = jadwalArray.map((j, idx) => `
                <div class="alert alert-success">
                    <h6>${idx + 1}. ${j.mataKuliah}</h6>
                    <p class="mb-1">🕐 ${j.jamMulai} - ${j.jamSelesai}</p>
                    <p class="mb-2">📍 ${j.ruangan} | 👨‍🏫 ${j.dosen}</p>
                    <div class="btn-group w-100">
                        <button class="btn btn-primary btn-sm" onclick='editJadwal(${JSON.stringify(j)})' data-bs-dismiss="modal">
                            Edit
                        </button>
                        <button class="btn btn-danger btn-sm" onclick="deleteJadwal(${j.id}); bootstrap.Modal.getInstance(document.getElementById('detailModal')).hide();">
                            Hapus
                        </button>
                    </div>
                </div>
            `).join('');

            document.getElementById('detailModalBody').innerHTML = html;
            new bootstrap.Modal(document.getElementById('detailModal')).show();
        }

        // CRUD Functions
        function openAddForm() {
            document.getElementById('modalTitle').textContent = 'Tambah Jadwal';
            document.getElementById('jadwalForm').reset();
            document.getElementById('editId').value = '';
        }

        function editJadwal(jadwal) {
            document.getElementById('modalTitle').textContent = 'Edit Jadwal';
            document.getElementById('editId').value = jadwal.id;
            document.getElementById('mataKuliah').value = jadwal.mataKuliah;
            document.getElementById('hari').value = jadwal.hari;
            document.getElementById('tanggal').value = jadwal.tanggal;
            document.getElementById('jamMulai').value = jadwal.jamMulai;
            document.getElementById('jamSelesai').value = jadwal.jamSelesai;
            document.getElementById('ruangan').value = jadwal.ruangan;
            document.getElementById('dosen').value = jadwal.dosen;

            new bootstrap.Modal(document.getElementById('jadwalModal')).show();
        }

        function saveJadwal() {
            const editId = document.getElementById('editId').value;
            
            let mataKuliah = document.getElementById('mataKuliah').value.trim();
            let hari = document.getElementById('hari').value;
            let tanggal = document.getElementById('tanggal').value.trim();
            let jamMulai = document.getElementById('jamMulai').value;
            let jamSelesai = document.getElementById('jamSelesai').value;
            let ruangan = document.getElementById('ruangan').value.trim();
            let dosen = document.getElementById('dosen').value.trim();

            if (!mataKuliah) {
                alert('Nama Mata Kuliah wajib diisi!');
                return;
            }

            if (!tanggal) {
                const today = new Date();
                const day = today.getDate().toString().padStart(2, '0');
                const month = (today.getMonth() + 1).toString().padStart(2, '0');
                const year = today.getFullYear();
                tanggal = `${day}-${month}-${year}`;
                
                hari = hariMap[today.getDay()];
            }

            if (!jamMulai) jamMulai = '08:00';
            if (!jamSelesai) jamSelesai = '10:00';
            if (!ruangan) ruangan = 'TBA';
            if (!dosen) dosen = 'TBA';

            const data = {
                mataKuliah,
                hari,
                tanggal,
                jamMulai,
                jamSelesai,
                ruangan,
                dosen
            };

            if (editId) {
                jadwalList = jadwalList.map(j => 
                    j.id == editId ? { ...data, id: parseInt(editId) } : j
                );
            } else {
                jadwalList.push({ ...data, id: Date.now() });
            }

            bootstrap.Modal.getInstance(document.getElementById('jadwalModal')).hide();
            
            renderJadwal();
            renderCalendar();
            renderHome();
        }

        function deleteJadwal(id) {
            jadwalList = jadwalList.filter(j => j.id !== id);
            renderJadwal();
            renderCalendar();
            renderHome();
            handleSearch();
        }

        function logout() {
            if (confirm('Apakah Anda yakin ingin logout?')) {
                sessionStorage.removeItem('loginData');
                window.location.href = 'login.html';
            }
        }

        // Initialize
        renderHome();
        renderJadwal();
        renderCalendar();
    </script>
</body>
</html>