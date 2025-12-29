<?php
session_start();
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pw = mysqli_real_escape_string($conn, $_POST['password']);

    // Query cek user (kolom password diganti jadi pw)
    $query = "SELECT * FROM users WHERE username='$username' AND pw='$pw'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {

        $data = mysqli_fetch_assoc($result);

        if ($data['status'] == "inactive") {
            echo "<script>alert('Akun Anda dinonaktifkan!'); window.location='index.php';</script>";
            exit;
        }

        // Simpan session
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['role'] = $data['role'];

        if ($data['role'] == "admin") {
            header("Location: admin.html");
        } else {
            header("Location: dashboard.html");
        }
        exit;

    } else {
        echo "<script>alert('Username atau password salah!'); window.location='index.php';</script>";
        exit;
    }
}
?>
