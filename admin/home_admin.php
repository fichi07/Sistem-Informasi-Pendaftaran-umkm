<?php
	session_start();
	if ($_SESSION['nama_lengkap'] == null) {
		echo "<script>
				alert('Silahkan Login Terlebih Dahulu !');
				window.location.href = '../index.php';
			</script>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../asset/css/bootstrap.css"> 
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>

    <style>
      section {
        min-height: 250px;
      }
    </style>
	<title>Home Admin Pendaftaran UMKM Online Kota Bojonegoro</title>
</head>
<body class="bg-info">
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		    <a class="navbar-brand">UMKM Bojonegoro</a>
		    <div class="navbar-brand my-2 my-lg-0 ml-auto">
		    	<a href="../aksi_login.php?op=out" class="btn btn-outline-primary">Logout</a>
		   	</div>
		</nav>
		<div class="row no-gutters mt-4">
			<div class="bg-dark mt-4 pr-3 pt-4 fixedpos">
            <ul class="nav flex-column ml-3 mb-5">
					<li class="nav-item">
						<a class="nav-link active text-white" href="home_admin.php">Dashboard</a><hr class="bg-secondary">
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="daftar_pendaftar.php">UMKM yang Mendaftar</a><hr class="bg-secondary">
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="berkas_user.php">Berkas Pendaftar</a><hr class="bg-secondary">
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="kelola_user.php">Kelola User</a><hr class="bg-secondary">
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="download_sertif.php">Upload Sertif</a><hr class="bg-secondary">
					</li>
					</ul>
			</div>
			<div class="container mt-5 mr-lg-3">
				<div class="col-md-10 ml-lg-auto">
					<div class="card" style="margin-top: 40px;">
						<div class="card-header">
							<b>Pengumuman</b>
						</div>
						<div class="card-body">
							<p>Selamat Datang di Website Pendaftaran UMKM Online</p>
						</div> 
					</div>
					<div class="text-center" style="margin-top: 30px">
					<p>Copyright &#169; 2021 by Moch Wahyu Fitra Choiri</p>
					</div> 
				</div>
				
			</div>
	
        
		</div>

	<script src="../assets/js/jquery.js"></script> 
    <script src="../assets/js/popper.js"></script> 
    <script src="../assets/js/bootstrap.js"></script>
</body>
</html>