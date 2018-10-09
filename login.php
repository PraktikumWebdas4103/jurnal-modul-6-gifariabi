<?php
	
	session_start();
	if (isset($_SESSION['nim'])) {
		header('location:menu.php');
	}
	require_once("koneksi.php");
	?>
	<form action="proseslogin.php">
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="Login"></td>
			</tr>
		</table>
	</form>