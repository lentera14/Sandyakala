<?php
require_once('koneksi.php');
session_start();
$id = $_SESSION['id'];
$result = mysqli_query($koneksi, "DELETE FROM req_batal WHERE id_req=$id");
unset($id);
if($result){
    header("Location:konfirmasi.php");
}
?>