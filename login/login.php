<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$query = mysqli_query("select * from login where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);
echo $cek;
?>