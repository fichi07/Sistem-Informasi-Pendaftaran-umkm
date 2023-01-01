<?php 
   include '../koneksi.php';
   include '../submit.php';
   session_start();
      if ($_SESSION['nama_lengkap'] == null) {
          echo "<script>
                  alert('Silahkan Login Terlebih Dahulu !');
                  window.location.href = '../index.php';
              </script>";
      }
    $userid = $_GET['nik'];
    
    $cekdulu = mysqli_query($koneksi,"SELECT *
    FROM upload WHERE nik='$userid'");
    $ambil = mysqli_fetch_array($cekdulu);
    //cek dulu sudah pernah submit belum
	?>

               
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="../asset/css/bootstrap.css"> 
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>

<body class="bg-info">

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand">UMKM Bojonegoro</a>
		    <div class="navbar-brand my-2 my-lg-0 ml-auto">
		    	<a href="../aksi_login.php?op=out" class="btn btn-outline-primary">Logout</a>
		   	</div>
		</nav>
	
    <!--content -->
        <div class="container mt-3 ml-lg-2">

                <!--form -->
            <form method="POST">
            <div class="row mt-5 mb-5 ml-xl-5">
                    <div class="col-10 ml-xl-5 " >
                    <a href="berkas_user.php" class="btn btn-light" style="margin-bottom:2%;">Kembali</a>
                        <div class="card">
                            <div class="card-body">
									<h2>Berkas</h2>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive" style="overflow-x:hidden;">
                                        
                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>NIK</label>
                                                <input name="nik" type="text" class="form-control"  value="<?php echo $ambil['nik']?>" disabled>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input name="namalengkap" type="text" class="form-control" value="<?php echo $ambil['namaL']?>" disabled>
                                            </div>
                                            </div>
                                        </div>

                                       

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                        <label for="foto" class=" form-control-label">Pas Foto</label>
                                                        <img src="../files/foto/<?php echo $ambil['file_foto']?>" width="80%">
                                                    </div>
                                                </div>

                                                <div class="col">
                                                <div class="form-group">
                                                        <label for="ktp" class=" form-control-label">Foto KTP</label>
                                                        <img src="../files/ktp/<?php echo $ambil['file_ktp']?>" width="80%">
                                                    </div>
                                                </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                  
            </form>
            <!--form -->
        </div>
        <!--content -->

   

        <div class="text-center" style="margin-top: 30px">
            <p>Copyright &#169; 2021 by Moch Wahyu Fitra Choiri</p>
        </div> 

        <script src="../assets/js/jquery.js"></script> 
    <script src="../assets/js/popper.js"></script> 
    <script src="../assets/js/bootstrap.js"></script>
</body>

</html>
