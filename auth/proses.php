<?php 
require_once "../config/config.php";

if(isset($_POST['daftar'])) {
	$user = trim(mysqli_real_escape_string($con, $_POST['user']));
	$pass = trim(mysqli_real_escape_string($con, $_POST['pass']));

	mysqli_query($con, "INSERT INTO login (username, password) VALUES ('$user', '$pass')") or die (mysqli_error($con));
}
echo "<script>alert('Akun anda berhasil dibuat, Click Ok untuk melanjutkan'); window.location='../index.php';</script>";
?>