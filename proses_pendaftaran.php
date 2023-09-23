<?
   require 'config.php'; 

   if(isset($_POST['daftar'])){
      $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $jeniskelamin = $_POST['jeniskelamin'];
      $agama = $_POST['agama'];

      $daftar = mysql_query($conn, "INSERT INTO user (nama,alamat,jeniskelamin,agama) VALUES  ('$nama','$alamat','$jeniskelamin','$agama')");
      if($daftar){
         header('Location: list-mahasiswa.php');
      } else {
         header('Location: form-daftar.php');
      }
   }
?>
