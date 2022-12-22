<?php
require_once('koneksi.php');
session_start();
$id = $_SESSION['id'];
$result = mysqli_query($koneksi, "DELETE FROM jadwal_kereta WHERE id_jadwal=$id");
unset($id);
if($result){
    header("Location:transaksi.php");
}
?>