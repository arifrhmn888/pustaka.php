<?php
include "../../config/koneksi.php";

$module = $_GET['module'];
$act = $_GET['act'];

if ($module='siswa' AND $act =='insert') :
$Nisn = $_POST['nisn'];
$Nama = $_POST['nama_siswa'];
$Jurusan = $_POST['jurusan'];
$Jekel = $_POST['jenis_kelamin'];
$No_Hp = $_POST['no_hp'];
$Alamat = $_POST['alamat'];


$query="INSERT INTO muda_siswa (nisn,nama_siswa,jurusan,jenis_kelamin, no_hp, alamat)
VALUE ('$Nisn','$Nama','$Jurusan','$Jekel','$No_Hp','$Alamat')";

if ($connection->query($query)) {

session_start();
$_SESSION["alert"]="
<div class='alert alert-success' role='alert'>
data siswa berhasil di simpan bro
</div>";

header("location: ../../media.php?module=" . $module);
}  else{
echo "data gagal cuk woilah !";
}


elseif ($module == 'siswa' and $act == 'delete') :

$nisn = $_GET['id'];

$query = "DELETE FROM muda_siswa WHERE nisn = '$nisn'";

if ($connection->query($query)) {

session_start();
$_SESSION["alert"]="
<div class='alert alert-success' role='alert'>
data siswa berhasil di hapus bro
</div>";

header("location: ../../media.php?module=" . $module);
}  else {
echo "data gagal cuk woilah !";
}


elseif ($module == 'siswa' and $act == 'update')  :
  $id = $_POST['nisn'];
  $nama = $_POST['nama_siswa'];
  $Jurusan =$_POST['jurusan'];
  $Jekel = $_POST['jenis_kelamin'];
  $No_Hp = $_POST['no_hp'];
  $Alamat = $_POST['alamat'];

 $query = "UPDATE muda_siswa SET
 nama_siswa = '$nama',
 jurusan = '$Jurusan',
 jenis_kelamin = '$Jekel',
 no_hp = '$No_Hp',
 alamat = '$Alamat'
 
 WHERE nisn = $id";

if ($connection->query($query)) {

  session_start();
  $_SESSION["alert"]="
  <div class='alert alert-success' role='alert'>
  data siswa berhasil di update bro
  </div>";
  
  header("location: ../../media.php?module=" . $module);
  }  else {
  echo "data gagal cuk woilah !";
  }


endif;
