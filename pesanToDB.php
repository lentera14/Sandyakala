<?php
include 'koneksi.php';
session_start();

$id = $_SESSION['id'];

if (isset($_POST['identitasPenumpang'])) {
    $kodeTiket = $_SESSION['kodeTiket'];
    $stasiunBrgkt = $_SESSION['stasiunBrgkt'];
    $stasiunTujuan = $_SESSION['stasiunTujuan'];
    $hariWaktu = $_SESSION['hariWaktu'];
    $gerbong = $_SESSION['gerbong'];
    $kodeKereta = $_SESSION['kodeKereta'];
    $namaDepan = $_POST['namaDepan'];
    $namaBelakang = $_POST['namaBelakang'];
    $nik = $_POST['nik'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $kategori = $_POST['kategori'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    mysqli_query($koneksi, "INSERT INTO daftar_reservasi values(NULL, '$kodeTiket', '$kodeKereta', '$hariWaktu', '$gerbong', '$stasiunBrgkt', '$stasiunTujuan', '$namaDepan', '$namaBelakang', '$nik', '$jenisKelamin', '$kategori', '$email', '$telepon', '', '$_SESSION[username]' )");
}
mysqli_query($koneksi, "DELETE FROM jadwal_kereta WHERE id_jadwal=$id");

header("location:transaksi.php")
?>