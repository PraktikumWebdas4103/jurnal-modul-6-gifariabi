<?php
	require_once("koneksi.php");
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$kelas = $_POST['kelas'];
		$gender = $_POST['gender'];
		$hobi = $_POST['hobi'];
		$fakultas = $_POST['fakultas'];
		$alamat = $_POST['alamat'];
		$password = $_POST['password'];

		$a = strlen($nama);
		$n = strlen($nim);

		
			if ($a > 35) {
				echo "Data max 35 karakter<br>";
			}
			if ($n != 10) {
				echo "Data harus 10 digit";
			}
		

		
			$sql = "INSERT INTO mahasiswa SET nama='".$nama."',nim='".$nim."',kelas='".$kelas."',gender='".$gender."',hobi='".$hobi."',fakultas='".$fakultas."',alamat='".$alamat."',password='".$password."'";
			mysqli_query($con,$sql);
			if ($sql) {
				echo "Data Berhasil disimpan";
			}
			else{
				echo "Data Tidak berhasil";
			
		}
	}