<?php
if (isset($_COOKIE['username'])) {
	echo "<h1>Cookie 'username' Tidak ada.</h1>";
}
if (isset($_COOKIE['namalengkap'])) {
	echo "<h1>Cookie 'nama lengkap' ada. Isinya :" .$_COOKIE['namalengkap']."</h1>";
} else {
	echo "<h1>Cookie 'namalengkap' Tidak ada.";
}
echo "<h2>Klik <a href='cookie01.php'>Disini</a> untuk penciptaan cookies</h2>";
?>