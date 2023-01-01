<?php 
    include '../koneksi.php';
    include '../submit.php';
	session_start();
	if ($_SESSION['nama_lengkap'] == null) {
		echo "<script>
				alert('Silahkan Login Terlebih Dahulu !');
				window.location.href = 'index.php';
			</script>";
	}
    $userid = $_SESSION['nama_lengkap'];
    $cekdulu = mysqli_query($koneksi,"SELECT registrasiumkm.nik,upload.namaL, upload.file_foto, upload.file_ktp 
    FROM registrasiumkm,upload WHERE registrasiumkm.nik=upload.nik AND registrasiumkm.nama_lengkap='$userid'");
    $ambil = mysqli_fetch_array($cekdulu);
	?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="../assets/js/jquery.js"></script>
    <link rel="stylesheet" href="../asset/css/bootstrap.css">
    <script src="../assets/js/bootstrap.min.js"></script>


	<title>Form Pendaftaran UMKM Bojonegoro Online</title>
</head>
<body class="bg-light">
	<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
			<a class="navbar-brand">Selamat Datang</a>
			<a class=" navbar-brand my-2 my-lg-0 ml-auto">Hai,<?php
		   				echo "<b>" . $_SESSION['nama_lengkap'] . "</b>";
		   		?> </a>  
			<a href="../aksi_login.php?op=out" class="btn btn-outline-success my-2 my-sm-0">Logout</a>
		</nav>
		<div class="row no-gutters ">
			<div class=" bg-dark mt-4 pr-3 pt-4 fixedpos">
						<ul class="nav flex-column ml-3 mb-5">
					<li class="nav-item">
						<a class="nav-link active text-white" href="home_pendaftar.php">Dashboard</a><hr class="bg-secondary">
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
			<div class="container mt-5 ">
				<div class="col-md-10 ml-lg-auto">
					<div class="card" style="margin-top: 40px;">
						<div class="card-header">
						<b>Upload Syarat Pendaftaran</b>
						</div>
							<form method="POST"  enctype="multipart/form-data">
                                <!-- formulir -->
                                    <div class="row mb-5">
                                        <div class="col-12">
                                        
                                                <div class="card-body"> 
                                                    <div class="market-status-table mt-4">
                                                        <div class="table-responsive" style="overflow-x:hidden;">
				                                                    <div class="col-md-10 ">
                                                                    <b>Pengumuman</b>
                                                                    </div>
                                                                        <div class="card-body">
                                                                            <p>
                                                                            Panduan Upload:
                                                                            <br>1. Isi NIK & Nama Lengkap sesuai pada formulir yang telah di isi
                                                                            <br>2. Upload Foto KTP
                                                                            <br>3. Upload Foto Kartu Keluarga
                                                                            <br>
                                                                            <br>NB : Berinama dengan format sebagai berikut :
                                                                            <br>NIK_Namalengkap_Jenisfile 
                                                                            <br>contoh = 19650039_WahyuFitra_KTP
                                                                            <br></p>
                                                                        </div>     
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>NIK</label>
                                                                                <input name="nik" type="text" class="form-control" placeholder="NIK" value="<?php echo $ambil['nik']?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Nama Lengkap</label>
                                                                                <input name="namaL" type="text" class="form-control" placeholder="Nama Lengkap" value="<?php echo $ambil['namaL']?>">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                    <label for="foto" class=" form-control-label">File Foto yang di Upload ukuran maksimal 5MB</label>
                                                                                    <input type="file" required="required" name="foto" class="form-control-file">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                    <label for="ktp" class=" form-control-label">File KTP yang di Upload ukuran maksimal 5MB</label>
                                                                                    <input type="file" required="required" name="ktp" class="form-control-file">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <input type="submit" name="submitfile" class="btn btn-primary" value="Simpan">
    
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                    <label for="foto" class=" form-control-label">Pas Foto</label>
                                                                                    <img src="../files/foto/<?php echo $ambil['file_foto']?>" width="100%">
                                                                                </div>
                                                                            </div>

                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                    <label for="ktp" class=" form-control-label">Foto KTP</label>
                                                                                    <img src="../files/ktp/<?php echo $ambil['file_ktp']?>" width="100%">
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                                
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                            </form>
					</div>
				</div>
				<div class="text-center" style="margin-top: 30px">
					<p>Copyright &#169; 2021 by Moch Wahyu Fitra Choiri</p>
                </div> 
            </div>
		</div>
	<script src="../assets/js/jquery.js"></script> 
    <script src="../assets/js/popper.js"></script> 
    <script src="../assets/js/bootstrap.js"></script>
</body>
</html>