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
    
    $sql = mysqli_query($koneksi,"SELECT registrasiumkm.status_pendaftaran, akunuser.nama_lengkap, registrasiumkm.nik, registrasiumkm.nama_usaha, registrasiumkm.kontak_usaha, statustempatusaha.jenisSts, registrasiumkm.alamat_usaha, jenisumkm.jenisUmkm, kecamatan.namaKecamatan, kelurahan.nama_klrhn,dusun.nama_dusun, kodepos.noKodepos 
                                                FROM dusun,akunuser,jenisumkm,kecamatan,kelurahan,kodepos,statustempatusaha,registrasiumkm 
                                                WHERE registrasiumkm.id_jenis=jenisumkm.id_jenis 
                                                AND registrasiumkm.id_Stu = statustempatusaha.id_Stu 
                                                AND registrasiumkm.id_kecamatan=kecamatan.id_kecamatan 
                                                AND registrasiumkm.id_kelurahan=kelurahan.id_kelurahan 
                                                AND registrasiumkm.id_dusun=dusun.id_dusun 
                                                AND registrasiumkm.id_kodepos=kodepos.id_kodepos 
                                                AND registrasiumkm.nama_lengkap=akunuser.nama_lengkap
                                                AND registrasiumkm.nik='$userid'");
                                                $umkm = mysqli_fetch_array($sql);

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
	
		 <!-- navbar -->

        <!-- content -->
         <div class="container mt-3 ml-lg-2">

                <!-- form -->
            <form method="POST">

                <!-- ambil Nama -->
                    <div class="row mt-5 mb-5 ml-xl-5">
                        <div class="col-10 ml-xl-5">
                        <a href="daftar_pendaftar.php" class="btn btn-light" style="margin-bottom:2%;">Kembali</a>
                            <div class="card">
                                <div class="card-body">
                                        <h2><?php echo $umkm['nama_lengkap']?></h2>     
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ambil Nama -->

                    <!------------------ Data User ------------------->
                    <div class="row mt-5 mb-5 ml-xl-5">
                        <div class="col-12 ml-xl-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="market-status-table mt-4">
                                        <div class="table-responsive" style="overflow-x:hidden;">
                                            <div class="d-sm-flex justify-content-between align-items-center">
                                            <h2>Data Pribadi</h2>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                <div class="form-group">
                                                    <label>NIK</label>
                                                    <input name="nik" type="text" class="form-control" value="<?php echo $umkm['nik']?>"> 
                                                </div>
                                                </div>
                                                <div class="col">
                                                <div class="form-group">
                                                    <label>Nama Usaha</label>
                                                    <input name="namaUsaha" type="text" class="form-control" placeholder="Nama Usaha" value="<?php echo $umkm['nama_usaha']?>" disabled>
                                                </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Nama Lengkap</label>
                                                    <input name="namalengkap" type="text" class="form-control" placeholder="Nama Lengkap" value="<?php echo $umkm['nama_lengkap']?>" disabled>
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
                                                        <input  name="kecamatan" type="text" class="form-control"value="<?php echo $umkm['namaKecamatan']?>"disabled>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Kelurahan</label>
                                                        <input  name="kelurahan" type="text" class="form-control"  value="<?php echo $umkm['nama_klrhn']?>"disabled>
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
                                            
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Status Pendaftaran</label>
                                                        <input  name="SP" type="text" class="form-control"value="<?php echo $umkm['status_pendaftaran']?>" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="update2" class="btn btn-primary" value="Simpan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------------------ Data User ------------------->
                  
            </form>
            <!-- form -->

        </div>
        <!-- content -->
   
     
        <footer>
        <div class="text-center" style="margin-top: 30px">
            <p>Copyright &#169; 2021 by Moch Wahyu Fitra Choiri</p>
        </div> 
        </footer>
        <script src="../assets/js/jquery.js"></script> 
    <script src="../assets/js/popper.js"></script> 
    <script src="../assets/js/bootstrap.js"></script>
</body>

</html>
