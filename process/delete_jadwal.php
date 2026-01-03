<?php
session_start();
require '../config/koneksi.php';

// Cek login
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Cek queri ID
if (isset($_GET['id'])) {

    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    
    $query = "DELETE FROM jadwal WHERE id = '$id' AND user_id = '$user_id'";
    
    if (mysqli_query($koneksi, $query)) {
        if (mysqli_affected_rows($koneksi) > 0) {
            $_SESSION['success'] = "Jadwal berhasil dihapus!";
        } else {
            $_SESSION['error'] = "Jadwal tidak ditemukan atau bukan milik Anda!";
        }
    } else {
        $_SESSION['error'] = "Gagal menghapus jadwal: " . mysqli_error($koneksi);
    }
} else {
    $_SESSION['error'] = "ID jadwal tidak valid!";
}

// Redirect kembali
$redirect = isset($_GET['redirect']) ? $_GET['redirect'] : 'jadwal';
header("Location: ../dashboard.php?page=" . $redirect);
exit();
?>