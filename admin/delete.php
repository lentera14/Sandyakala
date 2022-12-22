<?php
require_once('koneksi.php');
session_start();
$id = $_SESSION['id'];
$kodeTiket = $_SESSION['kodeTiket'];
$result = mysqli_query($koneksi, "DELETE FROM daftar_reservasi WHERE kode_tiket='$kodeTiket'");
$result2 = mysqli_query($koneksi, "DELETE FROM req_batal WHERE id_req=$id");
unset($id);
unset($kodeTiket);
if($result){
    header("Location:konfirmasi.php");
}
?>