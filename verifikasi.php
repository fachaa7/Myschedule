<?php
session_start();

// pastikan ada session reset_code dan username
if (!isset($_SESSION['reset_code']) || !isset($_SESSION['reset_username'])) {
    // tidak ada → kembali ke awal
    header("Location: forgot_password.php");
    exit();
}

// OPTIONAL: cek expired (5 menit = 300 detik)
if (isset($_SESSION['reset_time']) && (time() - $_SESSION['reset_time'] > 300)) {
    // kode expired → hapus session terkait dan kembalikan user ke form awal
    unset($_SESSION['reset_username'], $_SESSION['reset_contact'], $_SESSION['reset_code'], $_SESSION['reset_time']);
    $expired = true;
} else {
    $expired = false;
}

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !$expired) {
    $input_code = trim($_POST['code']);
    $session_code = (string)$_SESSION['reset_code'];

    // bandingkan sebagai string, hapus spasi
    if ($input_code === $session_code) {
        // kode cocok → lanjut reset password
        header("Location: new_password.php");
        exit();
    } else {
        $message = "<div class='alert alert-danger'>Kode verifikasi salah!</div>";
    }
} elseif ($expired) {
    $message = "<div class='alert alert-danger'>Kode OTP sudah kadaluarsa. Silakan ulangi proses.</div>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Verifikasi Kode</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/verifikasi.css">
</head>
<body>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card p-4">
        <div class="card-body">
          <img src="https://upload.wikimedia.org/wikipedia/id/2/2c/Politeknik_Negeri_Batam.png" alt="logo" class="logo">
            <h3 class="card-title text-center">Verifikasi Kode OTP</h3>

            <?php if ($message) echo $message; ?>

                <div class="alert alert-info text-center">
                    <b>Kode OTP: <?php echo htmlspecialchars($_SESSION['reset_code']); ?></b>
                </div>

            <form method="POST">
                <div class="mb-3">
                    <label>Masukkan Kode</label>
                    <input type="text" name="code" class="form-control" required>
                </div>
                <button class="btn btn-primary w-100">Verifikasi</button>
            </form>
                <div class="text-center mt-3">
                    <a href="forgot_password.php" class="back-link">← Ulangi proses</a>
                </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
