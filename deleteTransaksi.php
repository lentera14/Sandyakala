<?php
require_once('koneksi.php');
session_start();
$id = $_SESSION['id'];
$result = mysqli_query($koneksi, "DELETE FROM daftar_reservasi WHERE id_reservasi=$id");
unset($id);
if($result){
    header("Location:transaksi.php");
}
?>