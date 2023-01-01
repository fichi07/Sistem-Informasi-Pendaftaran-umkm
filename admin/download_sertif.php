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
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Upload Sertif</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../asset/css/bootstrap.css"> 
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>

<body class="bg-info">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand">UMKM Bojonegoro</a>
		    <div class="navbar-brand my-2 my-lg-0 ml-auto">
		    	<a href="../aksi_login.php?op=out" class="btn btn-outline-primary">Logout</a>
		   	</div>
		</nav>
		<div class="row no-gutters">
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
				<div class="col-md-10 ml-lg-auto ">
					<div class="card" style="margin-top: 40px;">
						<div class="card-header">
						<b>Upload Surat Keterangan Menjadi Anggota UMKM</b>
						</div>
							<form method="POST"  enctype="multipart/form-data">
                                <!-- formulir -->
                                    <div class="row mb-5">
                                        <div class="col-12">
                                        
                                                <div class="card-body"> 
                                                    <div class="market-status-table mt-4">
                                                        <div class="table-responsive" style="overflow-x:hidden;">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>NIK</label>
                                                                                <input name="nik" type="text" class="form-control" placeholder="NIK">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label>Nama Lengkap</label>
                                                                                <input name="namaL" type="text" class="form-control" placeholder="NIK">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>

                                           
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                    <label for="foto" class=" form-control-label">File ukuran maksimal 5MB</label>
                                                                                    <input type="file" name="gambar" class="form-control-file">
                                                                            </div>
                                                                        </div>
                                                                    

                                                                    <div class="modal-footer">
                                                                        <input type="submit" name="submitdownload" class="btn btn-primary" value="Simpan">
                                                                        <input type="submit" name="updatedownload" class="btn btn-primary" value="Update">
                                                                    </div>
                                                    

                                                                    <table id="dataTable3" class="table table-hover" style="width:100%"><thead class="thead-dark">
											<tr>
												<th>No</th>
												<th>NIK</th>
												<th>Nama User</th>
                                                <th>file</th>
                                                <th>Opsi</th>
												
											</tr></thead><tbody>
											<?php 
											$form=mysqli_query($koneksi,"SELECT * FROM download ORDER BY nama_lengkap ASC");
											$no=1;
											while($b=mysqli_fetch_array($form)){
                                                $usernm = $b['nama_lengkap'];

												?>
												
                                                
												<tr>
													<td><?php echo $no++ ?></td>
													<td><?php echo $b['nik'] ?></td>
													<td><?php echo $b['nama_lengkap'] ?></td><form method="post">
                                                    <td><?php echo $b['file'] ?></td>
                                                    <input type="hidden" value="<?php echo $usernm?>" name="nmuser">
                                                    <td><input type="submit" class="btn btn-danger btn-sm" name="hapussertif" value="Hapus"></td>
                                                    </form>
												</tr>		
                                                
                                                <?php 
                                                };
      
											?>
										</tbody>
										</table>

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
