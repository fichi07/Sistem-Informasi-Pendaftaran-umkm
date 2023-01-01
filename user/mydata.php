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


	<title>Form</title>
</head>
<body class="bg-light">
	<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
			<a class="navbar-brand">Selamat Datang</a>
			<a class=" navbar-brand my-2 my-lg-0 ml-auto">Hai, <?php
		   				echo "<b>" . $_SESSION['nama_lengkap'] . "</b>";
		   		?> </a>   </a>  
			<a href="../aksi_login.php?op=out" class="btn btn-outline-success my-2 my-sm-0">Logout</a>
		</nav>
		<div class="row no-gutters ">
			<div class="bg-dark mt-4 pr-3 pt-4 fixedpos">
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
        
            <div class="container mt-5">
                        <div class="col-md-10 ml-lg-auto">
                            <div class="card " style="margin-top: 40px;">
                            <form method="POST">
                                <div class="card-body">
                                    <div class="market-status-table mt-4">
                                        <div class="table-responsive" style="overflow-x:hidden;">
                                            <div class="d-sm-flex justify-content-between align-items-center">
                                            <h2>Data Pribadi</h2>
                                            </div>
                                            <?php
                                              
                                                $sql = mysqli_query($koneksi,"SELECT registrasiumkm.nama_lengkap, registrasiumkm.nik, registrasiumkm.nama_usaha, registrasiumkm.kontak_usaha, statustempatusaha.jenisSts, registrasiumkm.alamat_usaha, jenisumkm.jenisUmkm, kecamatan.namaKecamatan, kelurahan.nama_klrhn,dusun.nama_dusun, kodepos.noKodepos 
                                                FROM dusun,jenisumkm,kecamatan,kelurahan,kodepos,statustempatusaha,registrasiumkm 
                                                WHERE registrasiumkm.id_jenis=jenisumkm.id_jenis 
                                                AND registrasiumkm.id_Stu = statustempatusaha.id_Stu 
                                                AND registrasiumkm.id_kecamatan=kecamatan.id_kecamatan 
                                                AND registrasiumkm.id_kelurahan=kelurahan.id_kelurahan 
                                                AND registrasiumkm.id_dusun=dusun.id_dusun 
                                                AND registrasiumkm.id_kodepos=kodepos.id_kodepos 
                                                AND registrasiumkm.nama_lengkap='$userid'");
                                                $umkm = mysqli_fetch_array($sql);

                                          
                                                ?>

                                            <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Nama Lengkap</label>
                                                    <input name="namalengkap" type="text" class="form-control" placeholder="Nama Lengkap" value="<?php echo $umkm['nama_lengkap']?>" disabled>
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label>NIK</label>
                                                    <input name="nik" type="text" class="form-control" placeholder="NIK" value="<?php echo $umkm['nik']?>"disabled> 
                                                </div>
                                                </div>
                                               
                                            </div>

                                            <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Nama Usaha</label>
                                                    <input name="namaUsaha" type="text" class="form-control" placeholder="Nama Usaha" value="<?php echo $umkm['nama_usaha']?>" disabled>
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label>Kontak Tempat Usaha</label>
                                                    <input name="KTU" type="text" class="form-control" placeholder="Kontak Tempat Usaha" value="<?php echo $umkm['kontak_usaha']?>" disabled>
                                                </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Status Tempat Usaha</label>
                                                    <input name="stu" type="text" class="form-control" value="<?php echo $umkm['jenisSts']?>" disabled>
                                                </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Alamat Usaha</label>
                                                        <input name="alamatUsaha" type="text" class="form-control" placeholder="Alamat Usaha" value="<?php echo $umkm['alamat_usaha']?>" disabled>
                                                    </div>
                                                </div>
                                            
                                               
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Jenis UMKM</label>
                                                        <input name="jenisumkm" type="text" class="form-control" value="<?php echo $umkm['jenisUmkm']?>"disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Kecamatan</label>
                                                        <input  name="kecamatan" type="text" class="form-control" value="<?php echo $umkm['namaKecamatan']?>"disabled>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Kelurahan</label>
                                                        <input  name="kelurahan" type="text" class="form-control" value="<?php echo $umkm['nama_klrhn']?>"disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Dusun</label>
                                                        <input  name="dusun" type="text" class="form-control" value="<?php echo $umkm['nama_dusun']?>"disabled>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Kode Pos</label>
                                                        <input  name="kodepos" type="text" class="form-control" value="<?php echo $umkm['noKodepos']?>"disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                  

                    

          

            </div>

    </div>
	<script src="../assets/js/jquery.js"></script> 
    <script src="../assets/js/popper.js"></script> 
    <script src="../assets/js/bootstrap.js"></script>
</body>
</html>