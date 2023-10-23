<?php
include "../../config/koneksi.php"; //include file koneksi

//inisiasi module dna act
$module = $_GET['module'];
$act = $_GET['act'];

//bagian insert data
if($module == 'buku' AND $act == 'insert') :
    //inisiasi nama field ke dalam variabel
    $isbn    = $_POST['isbn'];
    $judul    = $_POST['judul_buku'];
    $pengarang    = $_POST['pengarang'];
    $penerbit    = $_POST['penerbit'];
    $tahun    = $_POST['tahun_terbit'];
    $jebu    = $_POST['jenis_buku'];
    $stok    = $_POST['stok'];


//query insert
$query = "INSERT INTO muda_buku (isbn, judul_buku, pengarang, penerbit, tahun_terbit, jenis_buku, stok)
          VALUES ('$isbn','$judul', '$pengarang', '$penerbit', '$tahun', '$jebu', '$stok')";
          
          //kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

//munculkan alert sukses simpan data dengan session
session_start();
$_SESSION["alert"] = "
<div class='alert alert-success' role='alert'>
Data Buku Berhasil Disimpan.
</div>
";


    //redirect ke halaman index.php 
    header("location: ../../media.php?module=" . $module);

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}




//----- BAGIAN HAPUS -----

elseif ($module == 'buku' AND $act == 'delete') :

//ambil id siswa
$id = $_GET['id'];

//query delete
$query ="DELETE FROM muda_buku WHERE isbn=$id";

if($connection->query($query)) {

    //munculkan alert sukses simpan data dengan session
    session_start();
    $_SESSION["alert"] = "
    <div class='alert alert-danger' role='alert'>
    Data buku Berhasil Dihapus.
    </div>
    ";
    
    
        //redirect ke halaman index.php 
        header("location: ../../media.php?module=" . $module);
    
    } else {
    
        //pesan error gagal insert data
        echo "Data Gagal Disimpan!";
    
    }


//bagian edit siswa

elseif ($module == 'buku' AND $act == 'update') :

//inisiasi data yang dikirim ke dalam variabel

$id    = $_POST['isbn'];
$judul    = $_POST['judul_buku'];
$pengarang    = $_POST['pengarang'];
$penerbit    = $_POST['penerbit'];
$tahun    = $_POST['tahun_terbit'];
$jebu    = $_POST['jenis_buku'];
$stok    = $_POST['stok'];

//query data
$query = "UPDATE muda_buku SET
          judul_buku  = '$judul',
          pengarang   = '$pengarang',
          penerbit    = '$penerbit',
          tahun_terbit= '$tahun',
          jenis_buku  = '$jebu',
          stok        = '$stok'
          WHERE isbn = '$id'";

if($connection->query($query)) {

    //munculkan alert sukses update data dengan session
    session_start();
    $_SESSION["alert"] = "
    <div class='alert alert-success' role='alert'>
    Data Siswa Berhasil DiUpdate.
    </div>
    ";
    
    
        //redirect ke halaman index.php 
        header("location: ../../media.php?module=" . $module);
    
    } else {
    
        //pesan error gagal insert data
        echo "Data Gagal Diupdate!";
    
    }



endif;