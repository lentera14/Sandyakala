<?php
require_once('koneksi.php');
session_start();
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM daftar_reservasi WHERE id_reservasi = $id");

while($item = mysqli_fetch_array($result)){
    $kodeTiket = $item['kode_tiket'];
    $kodeKereta = $item['kode_kereta'];
    $stasiunBrgkt = $item['stasiun_berangkat'];
    $stasiunTujuan = $item['stasiun_tujuan'];
    $gerbong = $item['gerbong'];
    $tanggalWaktu = $item['tanggal_waktu'];
    $namaDepan = $item['nama_depan'];
    $namaBlkg = $item['nama_belakang'];
    $nik = $item['NIK'];
    $jenisKelamin = $item['jenis_kelamin'];
    $kategori = $item['kategori'];
    $email = $item['email'];
    $telepon = $item['nama_depan'];
    $buktiBayar = $item['bukti_bayar'];
    $username = $item['username'];
}

$add = mysqli_query($koneksi, "INSERT INTO req_batal values(NULL, '$kodeTiket', '$kodeKereta',  '$tanggalWaktu', '$gerbong', '$stasiunBrgkt', '$stasiunTujuan', '$namaDepan', '$namaBlkg', '$nik', '$jenisKelamin', '$kategori', '$email', '$telepon', '$buktiBayar', '$username')");

header("location:transaksi.php");
?>