<?php

$host ="localhost";
$username ="id20045785_syakala";
$password ="%JalDHucVQir!rB7S)d(";
$db ="id20045785_sandyakala";

$koneksi = mysqli_connect($host, $username, $password, $db);

if (!$koneksi) {
    die("koneksi gagal " . mysqli_connect_error());
}
?>