<?php
	session_start();
	include "koneksi.php";

	$op = $_GET['op'];

	if ($op == "in") {
		$email = $_POST['email'];
		$pswA = $_POST['password'];
		$query = "SELECT * FROM akunuser WHERE emailuser = '" . $email . "' AND status='user' AND passworduser = '" . $pswA . "'";
		$h_1 = $koneksi->query($query);
		if (mysqli_num_rows($h_1) == 1) {
			$d_1 = $h_1->fetch_array();
			if ($d_1['status'] == "user") {
				$_SESSION['nama_lengkap'] = $d_1['nama_lengkap'];
				$_SESSION['status'] = $d_1['status'];
				header("location: user/home_pendaftar.php"); 
			} else {
				echo "<script>
				alert('Akun Anda Belum Aktif, Silahkan Cek Email Anda untuk Aktivasi Akun !');
				history.back();
			</script>";
			}
		} else if (mysqli_num_rows($h_1) == 0) {
			$query = "SELECT * FROM akunuser WHERE emailuser = '" . $email . "' AND status='admin'  AND passworduser = '" . $pswA . "'";
			$h_1 = $koneksi->query($query);
			if (mysqli_num_rows($h_1) == 1) {
				$d_1 = $h_1->fetch_array();
				$_SESSION['nama_lengkap'] = "admin";
				$_SESSION['id_admin'] = $d_1['id_admin'];
				header("location: admin/home_admin.php");
			} else {
				echo "<script>
				alert('Username atau Password Anda Salah !');
				history.back();
			</script>";
			}
		} else {
			echo "<script>
				alert('Username atau Password Anda Salah !');
				history.back();
			</script>";
		}
	} else if ($op == "out"){
		unset($_SESSION['nama_lengkap']);
		header("location: index.php");
	}
?>