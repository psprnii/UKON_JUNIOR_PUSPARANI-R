<?php

	$koneksi = mysqli_connect("localhost","root","","sertifikasi");

	if (!$koneksi) {
		# code...
		die("koneksi gagal: " . mysqli_connect_error());
	}
	
?>