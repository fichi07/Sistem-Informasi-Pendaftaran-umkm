<?php
	session_start();
    include "koneksi.php";
	$pass = $_POST['password'];
	$ulangi_password = $_POST['ulangi_password'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$email = $_POST['email'];

	$sql = "SELECT email,nik FROM akunuser WHERE email = '" . $email . "'";
	$a = $koneksi->query($sql);

	if ($a && mysqli_num_rows($a) > 0) {
		echo "<script>
				alert('Email Sudah Terdfatar !'); 
				history.back();
			</script>";
	} else if ($pass != $ulangi_password) {
		echo "<script>
				alert('Ulangi, password tidak sama'); 
				history.back();
			</script>";
	} else {
		include "koneksi.php";
		$sql = "INSERT INTO akunuser VALUES ('" . $nama_lengkap . "', '" . $email . "', '" . $pass . "', 'user')";
        $a = $koneksi->query($sql);
        echo "<script>
				alert('Anda Sukses Registrasi, silahkan Login !');
				window.location.href = 'index.php';
            </script>";
    }
?>   