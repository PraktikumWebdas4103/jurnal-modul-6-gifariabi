<?php
	session_start();
	require_once("koneksi.php");
	$nim = $_POST['nim'];
	$password = $_POST['password'];

	$cekuser = mysql_query("SELECT * FROM mahasiswa WHERE nim = '$nim'");
	$jumlah = mysql_num_rows($cekuser);
	$hasil = mysql_fetch_array($cekuser);

	$_SESSION['nim'] = $hasil['nim'];
	header('location:menu.php');
	?>