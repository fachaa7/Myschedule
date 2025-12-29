<?php
session_start();
include 'koneksi.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $contact  = mysqli_real_escape_string($koneksi, $_POST['contact']);

    // Cek user & contact
    $cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND contact='$contact'");
    
    if (mysqli_num_rows($cek) > 0) {

        // generate kode 6 digit random
        $code = rand(100000, 999999);
        
        $_SESSION['reset_username']  = $username;
        $_SESSION['reset_contact']   = $contact;
        $_SESSION['reset_code']      = $code;

        header("Location: verifikasi.php");
        exit();
    } else {
        echo "<script>
            alert('NIM atau Nomor Telepon tidak sesuai!');
            window.location='forgot_password.php';
          </script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lupa Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/forgot_password.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <div class="card-body">
                    <img src="https://upload.wikimedia.org/wikipedia/id/2/2c/Politeknik_Negeri_Batam.png" alt="logo" class="logo">
                        <h2 class="card-title text-center mb-4">Lupa Password</h2>

                        <?php if ($message) echo "<div class='alert alert-info'>$message</div>"; ?>

                        <form method="POST">
                            <div class="mb-3">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Masukkan username anda" required>
                            </div>

                            <div class="mb-3">
                                <label>Contact</label>
                                <input type="text" name="contact" class="form-control" placeholder="Masukkan nomor telepon anda" required>
                            </div>

                            <button class="btn btn-primary w-100">Selanjutnya</button>
                            <div class="text-center mt-3">
                                <a href="login.php" class="back-link">← Kembali ke Login</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.getElementById('step1Form').addEventListener('submit', function(e) {
    e.preventDefault();

    const username = document.getElementById('username').value.trim();
    const contact = document.getElementById('contact').value.trim();

    if (username === '' || contact === '') {
      alert('Semua kolom harus diisi!');
      return;
    }

    if (contact.length < 10 || contact.length > 13) {
      alert('Nomor telepon harus 10–13 digit!');
      return;
    }

    // Simpan data sementara (misalnya di sessionStorage)
    const resetData = { username, contact, code: "123456" }; 
    sessionStorage.setItem('resetData', JSON.stringify(resetData));

    // Lanjut ke halaman berikut
    window.location.href = 'verifikasi.php';
  });
</script>
</body>
</html>
