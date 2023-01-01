
<?php
 include '../koneksi.php';
 session_start();
	if ($_SESSION['nama_lengkap'] == null) {
		echo "<script>
				alert('Silahkan Login Terlebih Dahulu !');
				window.location.href = '../index.php';
			</script>";
	}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Daftar Pendaftar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../asset/css/bootstrap.css"> 
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>

<body class="bg-info">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand">UMKM Bojonegoro</a>
		    <div class="navbar-brand my-2 my-lg-0 ml-auto">
		    	<a href="../aksi_login.php?op=out" class="btn btn-outline-success my-2 my-sm-0">Logout</a>
		   	</div>
		</nav>
		<div class="row no-gutters mt-3">
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
    

			<!-- content -->
            <div class="container mt-5 mr-lg-3">
                    <div class="col-md-10 ml-lg-auto">
                        <div class="card" style="margin-top: 40px;">
                           
                                <div class="card-header">
									<h2>Daftar UMKM yang Mendaftar</h2>
                                </div>

								<div class="row mb-5">
									<div  class="col-12">
										<div class="card-body table-responsive" style="overflow-x:hidden;">
											<table id="dataTable3" class="table table-hover" style="width:100%"><thead class="thead-dark">
												<tr>
												<th>NIK</th>
												<th>Nama Lengkap</th>
												<th>Nama Usaha</th>
												<th>Alamat Usaha</th>
												<th>Kontak Usaha</th>
													<th></th>
													<th></th>
												</tr></thead><tbody>
												<?php
													$form=mysqli_query($koneksi,"SELECT * FROM registrasiumkm ORDER BY nama_lengkap ASC");
													

													while ($c=mysqli_fetch_array($form)) {
														 $usernm = $c['nama_lengkap'];
												?>	
													<tr>
														<td><?php echo $c['nik']; ?></td>
														<td><?php echo $c['nama_lengkap']; ?></td>
														<td><?php echo $c['nama_usaha']; ?></td>
														<td><?php echo $c['alamat_usaha']; ?></td>
														<td><?php echo $c['kontak_usaha']; ?></td>
														<form method="post">
														<input type="hidden" value="<?php echo $usernm?>" name="nmuser">
														<td><a href="detail_pendaftar.php?nik=<?php echo $c['nik']; ?>" class="btn btn-info  btn-sm" title="Detail">Detail</a></td>
														<td><input type="submit" class="btn btn-danger btn-sm" name="hapus" value="Hapus"><td>
														</form>
													</tr>		
													
													<?php 
													};
													if(isset($_POST['hapus'])){
														$user = $_POST['nmuser'];
														$query = mysqli_query($koneksi,"delete from registrasiumkm where nama_lengkap='$user'");
														if($query){
															//berhasil bikin
															  echo " <div class='alert alert-success'>
															  Berhasil hapus data.
														  </div>
														  <meta http-equiv='refresh' content='1; url= daftar_pendaftar.php'/>  ";  
														  } else {
															echo "<div class='alert alert-warning'>
																  Gagal hapus data. Silakan coba lagi nanti.
															  </div>
															  <meta http-equiv='refresh' content='3; url= daftar_pendaftar.php'/> ";
														  }
													}
													
												?>
											</tbody>
											</table>
										</div>
									</div>
								</div>

						</div>
                    </div>
                        
            </div>
<!-- content --> 			
              
                
        </div>
        
        <footer>
        <div class="text-center" style="margin-top: 30px">
            <p>Copyright &#169; 2021 by Moch Wahyu Fitra Choiri</p>
        </div> 
        </footer>
        <!-- footer area end-->
   
    <!-- page container area end -->
	
    <script src="../assets/js/jquery.js"></script> 
    <script src="../assets/js/popper.js"></script> 
    <script src="../assets/js/bootstrap.js"></script>
</body>

</html>
