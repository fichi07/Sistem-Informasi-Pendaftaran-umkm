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
    //cek dulu sudah pernah submit belum
    $cekdulu = mysqli_query($koneksi,"select * from registrasiumkm where nama_lengkap ='$userid'");
    $lihathasil = mysqli_num_rows($cekdulu);
    
    //kalau udah pernah submit
    if($lihathasil>0){
        header("location:mydata.php");
    } else {

    };
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


	<title>Form Pendaftaran PPDB Madrasah ABC</title>
</head>
<body class="bg-light">
	<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
			<a class="navbar-brand">Selamat Datang</a>
			<a class=" navbar-brand my-2 my-lg-0 ml-auto">Hai, <?php
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
			<div class="container mt-3">
				<div class="col-md-10 ml-lg-auto">
					<div class="card" style="margin-top: 40px;">
						<div class="card-header">
						<b>Isi Formulir Pendaftaran</b>
                        <p>NB : Data Tidak dapat dirubah setelah di isi, Jadi isilah dengan Teliti</p>
						</div>
							<form method="POST">
		                    <!-- formulir -->
                        <div class="row mb-5">
                        <div class="col-12">
                       
                            <div class="card-body">
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive" style="overflow-x:hidden;">
                                    <div class="card-body">
                                                        <p>
                                                        Pengumuman:
                                                        <br>1. Samakan Nama Lengkap seperti saat melakukan Registrasi Akun
                                                       
                                                        </p>
                                                        </div>  
                                        <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input name="namalengkap" type="text" class="form-control" placeholder="Nama Lengkap" >
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>NIK</label>
                                                <input name="nik" type="text" class="form-control" placeholder="NIK" >
                                            </div>
                                            </div>
                                           
                                        </div>

                                        <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Nama Usaha</label>
                                                <input name="namaUsaha" type="text" class="form-control" placeholder="Nama Usaha" >
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Kontak Tempat Usaha</label>
                                                <input name="KTU" type="text" class="form-control" placeholder="Kontak Tempat Usaha" >
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Status Tempat Usaha</label>
                                                <select class="form-control" name="statusTempat" required>
                    							<option selected disabled>-Pilih Jenis -</option>
                    							<?php
                    								include "koneksi.php";
                    								$sql = "SELECT * FROM `statustempatusaha`";
                    								$a = mysqli_query($koneksi, $sql);
                    								while ($c = $a->fetch_array()) {
                    							?>
                    							<option value="<?php echo $c['id_kriteria']; ?>"><?php echo $c['nama_kriteria']; ?><?php echo $c['atribut']; ?></option>
                    							<?php
                    								}
                    							?>
                    						</select>
                                            </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Alamat Usaha</label>
                                                <input name="alamatUsaha" type="text" class="form-control" placeholder="Alamat Usaha" >
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Jenis UMKM</label>
                                                <select class="form-control" name="jenisumkm" required>
                    							<option selected disabled>-Pilih Jenis UMKM-</option>
                    							<?php
                    								include "koneksi.php";
                    								$sql = "SELECT * FROM `jenisumkm`";
                    								$a = mysqli_query($koneksi, $sql);
                    								while ($c = $a->fetch_array()) {
                    							?>
                    							<option value="<?php echo $c['id_jenis']; ?>"><?php echo $c['jenisUmkm']; ?></option>
                    							<?php
                    								}
                    							?>
                    						</select>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Kecamatan</label>
                                                <select class="form-control" name="kecamatan" required>
                    							<option selected disabled>-Pilih Kecamatan-</option>
                    							<?php
                    								include "koneksi.php";
                    								$sql = "SELECT * FROM `kecamatan`";
                    								$a = mysqli_query($koneksi, $sql);
                    								while ($c = $a->fetch_array()) {
                    							?>
                    							<option value="<?php echo $c['id_kecamatan']; ?>"><?php echo $c['namaKecamatan']; ?></option>
                    							<?php
                    								}
                    							?>
                    						</select>
                                            </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Kelurahan</label>
                                                    <select class="form-control" name="kelurahan" required>
                                                    <option selected disabled>-Pilih Kelurahan-</option>
                                                    <?php
                                                        include "koneksi.php";
                                                        $sql = "SELECT * FROM `kelurahan`";
                                                        $a = mysqli_query($koneksi, $sql);
                                                        while ($c = $a->fetch_array()) {
                                                    ?>
                                                    <option value="<?php echo $c['id_kelurahan']; ?>"><?php echo $c['nama_klrhn']; ?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Dusun</label>
                                                <select class="form-control" name="dusun" required>
                    							<option selected disabled>-Pilih Dusun-</option>
                    							<?php
                    								include "koneksi.php";
                    								$sql = "SELECT * FROM `dusun`";
                    								$a = mysqli_query($koneksi, $sql);
                    								while ($c = $a->fetch_array()) {
                    							?>
                    							<option value="<?php echo $c['id_dusun']; ?>"><?php echo $c['nama_dusun']; ?></option>
                    							<?php
                    								}
                    							?>
                    						</select>
                                            </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Kode Pos</label>
                                                    <select class="form-control" name="kodepos" required>
                                                    <option selected disabled>-Pilih Kode Pos-</option>
                                                    <?php
                                                        include "koneksi.php";
                                                        $sql = "SELECT * FROM `kodepos`";
                                                        $a = mysqli_query($koneksi, $sql);
                                                        while ($c = $a->fetch_array()) {
                                                    ?>
                                                    <option value="<?php echo $c['id_kodepos']; ?>"><?php echo $c['noKodepos']; ?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
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
	<script src="../assets/js/jquery.js"></script> 
    <script src="../assets/js/popper.js"></script> 
    <script src="../assets/js/bootstrap.js"></script>
</body>
</html>