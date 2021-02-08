<?php
// Session Start
session_start();


// Koneksi
$con = mysqli_connect('localhost', 'root', '', 'utspemogramanweb1');
if (mysqli_connect_errno()) {
	echo mysqli_connect_error();
} 

// Link Koneksi ke Halaman Utama Dahsboard
function base_url($url = null) {
	$base_url = "http://localhost/18111174_YuliantoHerlambang_UTSPemogramanWeb1";
	if($url != null) {
		return $base_url."/".$url;	
	} else {
		return $base_url;
	}
}
?>