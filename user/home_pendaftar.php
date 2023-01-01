<?php
	session_start();
	if ($_SESSION['nama_lengkap'] == null) {
		echo "<script>
				alert('Silahkan Login Terlebih Dahulu !');
				window.location.href = 'index.php';
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

    <!-- My CSS -->
    <style>
      section {
        min-height: 250px;
      }
    </style>
	<title>Home Pendaftaran UMKM Online Kota Bojonegoro</title>
</head>
<body class="bg-light">
		<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
			<a class="navbar-brand">Selamat Datang</a>
			<a class=" navbar-brand my-2 my-lg-0 ml-auto">Hai,
				<?php
		   				echo "<b>" . $_SESSION['nama_lengkap'] . "</b>";
		   		?> </a>  
			<a href="../aksi_login.php?op=out" class="btn btn-outline-success">Logout</a>
		</nav>
		<div class="row no-gutters mt-5">
			<div class="bg-dark mt-2 pr-3 pt-4 fixedpos">
						<ul class="nav flex-column ml-3 mb-5">
					<li class="nav-item">
						<a class="nav-link active text-white" href="#">Dashboard</a><hr class="bg-secondary">
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="form_pendaftaran.php">Isi Formulir</a><hr class="bg-secondary">
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="form_upload.php">Upload File</a><hr class="bg-secondary">
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="pendaftar_sertif.php">Download Sertifikat</a><hr class="bg-secondary">
					</li>
					
					</ul>
			</div>
			<div class="container mt-3 ">
				<div class="col-md-10 ml-lg-auto ">
					<div class="card" style="margin-top: 40px;">
						<div class="card-header">
							<b>Pengumuman</b>
						</div>
						<div class="card-body">
							<p>Selamat datang di sistem informasi pendaftaran UMKM di Bojonegoro online 
							<br>Sistem ini disusun oleh Moch Wahyu Fitra Choiri
							<br><br>
                            Panduan Pendaftaran:
                            <br>1. Isi seluruh formulir dan Upload file yang ditentukan, pastikan tidak ada data yang salah.
                            <br>2. Klik Simpan, Setelah Simpan masih dapat melakukan perubahan data pada formulir selama 1x24 jam sebelum dilakukan pengecekan oleh Admin
                            <br></p>
						</div> 
					</div>
				</div>
		
				<div class="text-center" style="margin-top: 30px">
					<p>Copyright &#169; 2021 by Moch Wahyu Fitra</p>
				</div> 
			</div>
	

	<script src="assets/js/jquery.js"></script> 
    <script src="assets/js/popper.js"></script> 
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>