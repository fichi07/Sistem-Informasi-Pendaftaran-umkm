<?php

  include 'koneksi.php';
 // input data user
              if(isset($_POST['submit'])){
              $nama = $_POST['namalengkap'];
              $nik = $_POST['nik'];
              $nmUsaha = $_POST['namaUsaha'];
              $alamatUsaha = $_POST['alamatUsaha'];
              $jenisumkm = $_POST['jenisumkm'];
              $kecamatan = $_POST['kecamatan'];
              $kelurahan = $_POST['kelurahan'];
              $dusun = $_POST['dusun'];
              $kodepos = $_POST['kodepos'];
              $STU = $_POST['statusTempat'];
              $KTU = $_POST['KTU'];
            
              $submitdata = mysqli_query($koneksi,"insert into registrasiumkm (nik,nama_lengkap,nama_usaha,alamat_usaha, id_jenis,id_Stu, id_kecamatan, id_kelurahan, id_dusun, id_kodepos, kontak_usaha) 
                values('$nik','$nama','$nmUsaha','$alamatUsaha','$jenisumkm','$STU','$kecamatan','$kelurahan','$dusun','$kodepos','$KTU')");
                
              if($submitdata){ 

                //berhasil bikin
                echo "<script>
                alert('Berhasil Submit !'); 
                window.location.href = 'home_pendaftar.php';
              </script>";

              }else{

                echo "<script>
                alert('Gagal Submit !'); 
                window.location.href = 'form_pendaftaran.php';
              </script>";
                }
          

    };

 // update data (user)
    if(isset($_POST['update'])){
      $nama = $_POST['namalengkap'];
      $nik = $_POST['nik'];
      $alamatUsaha = $_POST['alamatUsaha'];
      $jenisumkm = $_POST['jenisUsaha'];
      $kecamatan = $_POST['kecamatan'];
      $kelurahan = $_POST['kelurahan'];
      $dusun = $_POST['dusun'];
      $kodepos = $_POST['kodepos'];
      $STU = $_POST['statusTempat'];
      $KTU = $_POST['KTU'];
    $update = mysqli_query($koneksi,"update registrasiumkm set alamat_usaha='$alamatUsaha', id_jenis='$jenisumkm', id_Stu='$STU', id_kecamatan='$kecamatan', id_kelurahan='$kelurahan', id_dusun='$dusun', id_kodepos='$kodepos', kontak_usaha ='$KTU' where nik = '$nik'");

    if($update){ 

      //berhasil bikin
      echo "<script>
      alert('Berhasil Submit !'); 
      window.location.href = 'mydata.php';
    </script>";

    }else{

      echo "<script>
                alert('Gagal Submit !'); 
                window.location.href = 'form_update.php';
              </script>";
                }

    };

 // update data (admin)
    if(isset($_POST['update2'])){
      $nama = $_POST['namalengkap'];
      $nik = $_POST['nik'];
      $SP = $_POST['SP'];
      $up= mysqli_query($koneksi,"update registrasiumkm set status_pendaftaran='$SP' where nik = '$nik'");

    if($up){ 

      //berhasil bikin
     
      echo "<script>
      alert('Berhasil Submit !'); 
      window.location.href = 'daftar_pendaftar.php';
    </script>";
    }else{

       echo "<script>
      alert('Gagal Submit !'); 
      window.location.href = 'daftar_pendaftar.php';
    </script>";
      }

    };


    
     // input file(user)
    
    if(isset($_POST["submitfile"])) {
        $target_dir = "C:/laragon/www/UAS/files/foto/";
        $target_dir2 = "C:/laragon/www/UAS/files/ktp/";
        $file = $_FILES['foto']['name'];
        $file2 = $_FILES['ktp']['name'];
        $path = pathinfo($file);
        $path2 = pathinfo($file2);
        $filename = $path['filename'];
        $filename2 = $path2['filename'];
        $ext = $path['extension'];
        $ext2 = $path2['extension'];
        $temp_name = $_FILES['foto']['tmp_name'];
        $temp_name2 = $_FILES['ktp']['tmp_name'];
        $path_filename_ext = $target_dir.$filename.".".$ext;
        $path_filename_ext2 = $target_dir2.$filename2.".".$ext;
        $nik=$_POST['nik'];
        $nama=$_POST['namaL'];
        $ukuran = $_FILES['foto']['size'];
        if ($ukuran <5000000) {
          move_uploaded_file($temp_name,$path_filename_ext);
          move_uploaded_file($temp_name2,$path_filename_ext2);
          echo "Congratulations! File Uploaded Successfully.";
    $c=mysqli_query($koneksi,"INSERT INTO `upload`(`file_foto`,`file_ktp`, `id_file`, `nik`, `namaL`) VALUES ('$file','$file2',NULL,'$nik','$nama')");
    if($c=true){
      echo "<script>
      alert('Berhasil Submit !'); 
      window.location.href = 'form_upload.php';
    </script>";
    }else {
      echo "<script>
      alert('Gagal Submit !'); 
      window.location.href = 'form_upload.php';
    </script>";
    }
  
        }else if (file_exists($path_filename_ext||$path_filename_ext2)) {
            echo "Sorry, file already exists.";
        }else{
          echo "<script>
          alert('File Terlalu Besar!'); 
          window.location.href = 'form_upload.php';
        </script>";
       }

    };


     // download file(user)
    if (isset($_GET['filename'])) {
      $filename    = $_GET['filename'];
  
      $back_dir    ="../files/F_download/";
      $file = $back_dir.$_GET['filename'];
       
          if (file_exists($file)) {
              header('Content-Description: File Transfer');
              header('Content-Type: application/octet-stream');
              header('Content-Disposition: attachment; filename='.basename($file));
              header('Content-Transfer-Encoding: binary');
              header('Expires: 0');
              header('Cache-Control: private');
              header('Pragma: private');
              header('Content-Length: ' . filesize($file));
              ob_clean();
              flush();
              readfile($file);
              
              exit;
          } 
          else {
              $_SESSION['pesan'] = "Oops! File - $filename - not found ...";
              header("location:index.php");
          }
      };


     // ganti password
      if (isset($_POST["ganti"])) {
        $username = $_POST['namalengkap'];
        $passwordlama  = $_POST['pswdL'];
        $passwordbaru1 = $_POST['pswdB'];
        $passwordbaru2 = $_POST['pswdB1'];
        // cek benar tidaknya password yang lama
         
        $cekdulu = mysqli_query($koneksi,"select * from akunuser where nama_lengkap ='$username'");
        $ambil = mysqli_fetch_array($cekdulu);

         
        if ($ambil['passworduser'] == $passwordlama)
        {
            // jika password lama benar, maka cek kesesuaian password baru 1 dan 2
            if ($passwordbaru1 == $passwordbaru2)
            {
                $up= mysqli_query($koneksi,"update akunuser set passworduser='$passwordbaru1' where nama_lengkap = '$username'");
                if ($up) echo "Update password Admin sukses";
                echo "<script>
                alert('Berhasil Submit !'); 
                window.location.href = 'ubahsandi.php';
              </script>";
            }
            echo "<script>
                alert('Password harus sama !'); 
                window.location.href = 'ubahsandi.php';
              </script>";
        }
        echo "<script>
        alert('Password lama anda salah !'); 
        window.location.href = 'ubahsandi.php';
      </script>";
        };



        //Bagian Delete(admin)
        if(isset($_POST['hapussertif'])){
          $user = $_POST['nmuser'];
          $query = mysqli_query($koneksi,"delete from download where nama_lengkap='$user'");
          if($query){
              //berhasil bikin
                echo " <div class='alert alert-success'>
                Berhasil hapus data.
            </div>
            <meta http-equiv='refresh' content='1; url= download_sertif.php'/>  ";  
            } else {
              echo "<div class='alert alert-warning'>
                    Gagal hapus data. Silakan coba lagi nanti.
                </div>
                <meta http-equiv='refresh' content='3; url= download_sertif.php'/> ";
            }
      };

      //Bagian Insert file(admin)
      if(isset($_POST["submitdownload"])) {

          $target_dir = "C:/laragon/www/UAS/files/F_download/";
          $file = $_FILES['gambar']['name']; 
          $path = pathinfo($file);
          $filename = $path['filename'];
          $ext = $path['extension'];
          $temp_name = $_FILES['gambar']['tmp_name'];
          $path_filename_ext = $target_dir.$filename.".".$ext;
          $ukuran = $_FILES['gambar']['size'];
          $nama=$_POST['namaL'];
          $nik=$_POST['nik'];
          if ($ukuran <5000000) {
            move_uploaded_file($temp_name,$path_filename_ext);
            echo "Congratulations! File Uploaded Successfully.";
      $c=mysqli_query($koneksi,"INSERT INTO `download`(`id_down`,`nama_lengkap`, `nik`, `file`) VALUES (NULL,'$nama','$nik','$file')");
      if($c=true){
        echo "<script>
        alert('Berhasil Submit !'); 
        window.location.href = 'download_sertif.php';
      </script>";
      }else {
        echo "<script>
        alert('Gagal Submit !'); 
        window.location.href = 'download_sertif.php';
      </script>";
      }
    
          }else if (file_exists($path_filename_ext||$path_filename_ext2)) {
              echo "Sorry, file already exists.";
          }else{
            echo "<script>
            alert('Gagal Submit !'); 
            window.location.href = 'download_sertif.php';
          </script>";
         }
      
     
     
  
      };

      //Bagian Update sertif(admin)
      if(isset($_POST["updatedownload"])) {
        if (($_FILES['gambar']['name']!="")){
          $target_dir = "C:/laragon/www/UAS/files/F_download/";
          $file = $_FILES['gambar']['name']; 
          $path = pathinfo($file);
          $filename = $path['filename'];
          $ext = $path['extension'];
          $temp_name = $_FILES['gambar']['tmp_name'];
          $path_filename_ext = $target_dir.$filename.".".$ext;
  
  
          if (file_exists($path_filename_ext)) {
              echo "Sorry, file already exists.";
          }else{
             move_uploaded_file($temp_name,$path_filename_ext);
             echo "Congratulations! File Uploaded Successfully.";
         }
      }
      $nama=$_POST['namaL'];
      $nik=$_POST['nik'];
      $c_=mysqli_query($koneksi,"UPDATE download set file ='$file' where nik = '$nik'");
      if($c=true){
        echo "<script>
        alert('Berhasil Submit !'); 
        window.location.href = 'download_sertif.php';
      </script>";
      }else {
        echo "<script>
        alert('Gagal Submit !'); 
        window.location.href = 'download_sertif.php';
      </script>";
      }
      };
?>