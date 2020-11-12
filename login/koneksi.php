<?php
$server = "localhost";
$database = "user";
$username = "root";
$password = "";

// membuat koneksi
$connect = mysqli_connect($server, $username, $password, $database);
// mengecek koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
mysqli_close($connect);
?>