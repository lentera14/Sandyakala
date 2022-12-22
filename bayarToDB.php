<?php
include 'koneksi.php';
session_start();

$id = $_SESSION['id'];

if (isset($_POST['submit'])) {
    $buktiBayar = $_FILES['buktiBayar']['name'];
    $tmp_buktiBayar = $_FILES['buktiBayar']['tmp_name'];

    mysqli_query($koneksi, "UPDATE daftar_reservasi SET bukti_bayar ='$buktiBayar' WHERE id_reservasi=$id");
}

unset($id);

header("location:transaksi.php");
?>