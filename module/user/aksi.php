<?php
include "../../config/koneksi.php";

$module = $_GET['module'];
$act = $_GET['act'];

if ($module == 'user' and $act == 'insert') :

  $nama = $_POST['nama_user'];
  $username = $_POST['username'];
  $pass = $_POST['pass'];
  $level = $_POST['level'];

  $password = password_hash($pass, PASSWORD_DEFAULT);
  $query = "INSERT INTO muda_user (nama_user, username, password, level, is_active)
  VALUES ('$nama', '$username', '$password', '$level', '1')";
  
  if ($connection->query($query)){
    header("location: ../../media.php?module=".$module);
  }
  else{
    echo "gagal";
  }

endif;