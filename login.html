<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MySchedule - Login</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: url('https://www.polibatam.ac.id/wp-content/uploads/2022/07/MG_8893-scaled.jpg') center/cover no-repeat;
    }

    .login-container {
      width: 40%;
      padding: 40px;
      backdrop-filter: blur(10px);
      border-radius: 40px;
      background: #ffffff6e;
      box-shadow: 0 0 40px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #0e0e0e;
    }

    input.form-control {
      width:100%; padding:10px; 
      margin-bottom:5px; 
      border:1px solid #E2C892;
      border-radius:30px; 
      font-size:14px; 
      transition:transform 0.3s, box-shadow 0.3s;
    }

    input:focus {
      transform:scale(1.05); 
      box-shadow:0 0 10px #845512;
    }

    .btn-login {
      width:100%; 
      padding:10px; 
      border:none; 
      border-radius:30px;
      background-color:#E2C892; 
      color:white; 
      font-weight:600; 
      font-size:16px;
      transition:all 0.3s ease; cursor:pointer;
    }

    .btn-login:hover {
      box-shadow:0 0 10px; 
      transform:scale(0.95);
    }

    .logo {
      display: block;
      margin: 0 auto 10px;
      width: 20%;
    }

    .extra-link {
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
      font-size: 15px;
    }

    .extra-link a {
      color: #845512;
      text-decoration: none;
      font-weight: 600;
    }

    .extra-link a:hover {
      color: #E2C892;
      text-decoration: underline;
    }
  </style>
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
        <a href="lupa1.html">Lupa password</a>
        <a href="registrasi.html">Register</a>
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
        redirect: 'admin.html'
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
        (account.role === 'admin' ? 'admin.html' : 'dashboard.html');
    });
  </script>

</body>
</html>
