<?php
$value = 'achmad';
$value2 = 'Achmad Sodichin';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600);

echo "<h1>Ini halaman pengesetan cookies</h1>";
echo "<h2>Klik <a href='cookie02.php'>Disini </a> Untuk pemeriksaan cookies</h2>";
?>