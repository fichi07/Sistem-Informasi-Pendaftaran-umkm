<?php
	session_start();
	include "../koneksi.php";
	include "../submit.php";
    $userid = $_SESSION['nama_lengkap'];
		$sql = "SELECT * FROM registrasiumkm WHERE status_pendaftaran = 'terverifikasi' AND nama_lengkap = '$userid'";
		$a = $koneksi->query($sql);

		if (mysqli_num_rows($a) == 1) {

		
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
			<div class="container mt-5">
				<div class="col-md-10 ml-lg-auto">
					<div class="card" style="margin-top: 40px;">
						<div class="card-header">
						<b>Selamat UMKM milik anda telah terdaftar</b>
						</div>
                        <table class="table table-striped table-hover">
      <tr>
        <th>FILE NAME</th>
        <th>DOWNLOAD</th>
      </tr>
      <?php
	  $sql = "SELECT * FROM download where nama_lengkap = '$userid'";
	  $a = mysqli_query($koneksi, $sql);
        while($row = $a->fetch_array()){
          echo '
          <tr>
            <td>'.$row['file'].'</td>
			<td><a  class="btn btn-primary" href="pendaftar_sertif.php?filename='.$row['file'].'">Download File</a></td>
			
          </tr>
          ';
     
      }
      ?>
    </table>
                        </div>
                    </div>
                </div>
							
				  
					</div>
				</div>
				<div class="text-center" style="margin-top: 30px">
					<p>Copyright &#169; 2021 by Moch Wahyu Fitra Choiri</p>
				</div> 
			
	
		

		</div>
	<script src="assets/js/jquery.js"></script> 
    <script src="assets/js/popper.js"></script> 
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>

<?php
	} else {
		echo "<script>
				alert('Anda Belum Mengisi Formulir Pendaftaran !');
				window.location.href = 'form_pendaftaran.php';
			</script>";
	}
?>