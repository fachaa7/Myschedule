<?php
include "koneksi.php";
session_start();

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MySchedule - Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/login.css">
</head>
<body>

  <div class="login-container">
    <form id="loginForm" class="needs-validation" novalidate>
      <img src="https://upload.wikimedia.org/wikipedia/id/2/2c/Politeknik_Negeri_Batam.png" alt="logo" class="logo">

      <div class="mb-2">
        <label for="nama" class="form-label">Username</label>
        <input type="text" id="nama" class="form-control" placeholder="Masukkan NIM anda" required>
      </div>

      <div class="mb-2">
        <label for="password" class="form-label">Kata sandi</label>
        <input type="password" id="password" class="form-control" placeholder="Masukkan password anda" required>
      </div>

      <button type="submit" class="btn btn-login">Login</button>

      <div class="extra-link">
        <a href="lupa1.php">Lupa password</a>
        <a href="registrasi.php">Register</a>
      </div>
    </form>
  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    const accounts = {
      'admin': {
        password: '123',
        role: 'admin',
        nama: 'Administrator',
        status: 'active',
        redirect: 'admin.php'
      }
    }

    document.getElementById('loginForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const username = document.getElementById('nama').value.trim();
      const password = document.getElementById('password').value.trim();

      // Ambil data user dari localStorage
      const users = JSON.parse(localStorage.getItem('users')) || {};
      const allAccount = { ...accounts, ...users };

      let account = allAccount[username];
      let nimKey = username;

      if (!account) {
        for (const [key, acc] of Object.entries(allAccount)) {
          if (acc.nama.toLowerCase() === username.toLowerCase()) {
            account = acc;
            nimKey = key;
            break;
          }
        }
      }

      if (!account) {
        alert('Akun tidak terdaftar!');
        return;
      }

      if (account.password !== password) {
        alert('Password salah!');
        return;
      }

      if (account.status === 'inactive') {
        alert('Akun Anda dinonaktifkan!');
        return;
      }

      alert(`Login berhasil! Selamat datang ${account.nama}`);

      sessionStorage.setItem('loginData', JSON.stringify({
        role: account.role,
        nama: account.nama,
        nim: account.nim || nimKey,
        loginTime: new Date().toISOString()
      }));

      window.location.href = account.redirect || 
        (account.role === 'admin' ? 'admin.php' : 'dashboard.php');
    });
  </script>

</body>
</html>