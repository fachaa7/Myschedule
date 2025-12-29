<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['reset_username'])) {
    header("Location: login.php");
    exit();
}

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newPassword = mysqli_real_escape_string($koneksi, $_POST['newPassword']);
    $confirmPassword = mysqli_real_escape_string($koneksi, $_POST['confirmPassword']);

    if ($newPassword != $confirmPassword) {
        $message = "<span class='text-danger'>Password tidak cocok!</span>";
    } else {

        $user = $_SESSION['reset_username'];

        // Update password
        mysqli_query($koneksi, "UPDATE users SET password='$newPassword' WHERE username='$user'");

        // Hapus session reset
        session_unset();
        session_destroy();

        header("Location: login.php");
        exit();
        $message = "<span class='text-success'>Password berhasil diganti. Silakan login.</span>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Password Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/new_password.css">
</head>
<body>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card p-4">
        <div class="card-body">
          <img src="https://upload.wikimedia.org/wikipedia/id/2/2c/Politeknik_Negeri_Batam.png" alt="logo" class="logo">
            <h3 class="text-center">Password Baru</h3>

            <?php if ($message) echo "<div class='alert alert-info'>$message</div>"; ?>

            <form method="POST">
                <div class="mb-3">
                    <label for="newPassword" class="form-label">Password Baru</label>
                    <input type="password" name="newPassword" class="form-control" placeholder="Masukkan password baru" required>
                </div>
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
                    <input type="password" name="confirmPassword" class="form-control" placeholder="Konfirmasi password baru" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Reset Password</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.getElementById('step3Form').addEventListener('submit', function(e) {
    e.preventDefault();

    const newPassword = document.getElementById('newPassword').value.trim();
    const confirmPassword = document.getElementById('confirmPassword').value.trim();

    // Validasi kosong
    if (newPassword === '' || confirmPassword === '') {
      alert('Kolom password tidak boleh kosong!');
      return;
    }

    // Minimal 8 karakter
    if (newPassword.length < 8) {
      alert('Password minimal 8 karakter!');
      return;
    }

    // Minimal 6 karakter harus huruf atau angka
    if (!/[A-Za-z0-9]{6,}/.test(newPassword)) {
      alert('Password harus mengandung minimal 6 huruf atau angka!');
      return;
    }

    // Harus ada huruf besar
    if (!/[A-Z]/.test(newPassword)) {
      alert('Password harus mengandung huruf besar!');
      return;
    }

    // Harus ada huruf kecil
    if (!/[a-z]/.test(newPassword)) {
      alert('Password harus mengandung huruf kecil!');
      return;
    }

    // Harus ada angka
    if (!/[0-9]/.test(newPassword)) {
      alert('Password harus mengandung angka!');
      return;
    }

    // Konfirmasi harus sama
    if (newPassword !== confirmPassword) {
      alert('Konfirmasi password tidak cocok!');
      return;
    }

    // Kalau semua validasi lolos
    alert('Password berhasil direset!');
    window.location.href = 'login.php';
  });
</script>

</body>
</html>
