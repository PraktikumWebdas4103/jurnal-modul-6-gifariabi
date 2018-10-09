<?php
	$con = mysqli_connect('localhost','root','','pendaftaran');
	if (mysqli_connect_errno()) {
		echo "error koneksi db";
	}