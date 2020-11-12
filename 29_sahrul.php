<?php
	$nama = [["Nama"=>"Satria", "Kelas"=>"RPL 1"],
	["Nama"=>"Sahrul", "Kelas"=>"RPL 2"],
	["Nama"=>"Dhika", "Kelas"=>"RPL 3"],
	["Nama"=>"Evan", "Kelas"=>"RPL 4"],
	["Nama"=>"Fabian", "Kelas"=>"RPL 5"],
	["Nama"=>"Irfan", "Kelas"=>"RPL 6"]];
	
	foreach ($nama as $name) {
		echo "Nama : <b>" .$name["Nama"],"</b>";
		echo "Kelas : <b>" .$name["Kelas"], "</b><br>";
	}
?>