<?php
include "config/koneksi.php";
// inisiasi value yang dikirim ke varibel
$username = $_POST['username'];
$password = $_POST['password'];


// buat query buat username
$query = "SELECT * FROM muda_user WHERE username = '$username'";
$conn = mysqli_query($connection, $query);
$data = mysqli_fetch_array($conn);
// verify password
$pass = password_verify($password, $data['password']);


// cek apakah username exist
if (mysqli_num_rows($conn) > 0) {
    //  cek password
    if ($password == $pass) {
        // jika username & password benar
        session_start();
        //daftar session untuk user login
        $_SESSION['namauser'] = $data['nama_user'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['level_user'] = $data['level'];
        
        //arahkan kehalaman dashboard
        header("location: media.php?module=home");

    } else {

        // jika password tidak sesuai
        //munculkan alert gagal login 
        session_start();
        $_SESSION["alertlogin"] = "
    <div class = 'alert alert-success' role='alert'>
    Password tidak sesuai.
    </div>
    ";
        //redirect ke halaman awal
        header("location:index.php");
    }

} else {
    //jika username tidak cocok
    //munculkan alert gagal login 
    session_start();
    $_SESSION["alertlogin"] = "
    <div class = 'alert alert-success' role='alert'>
    User name tidak ditemukan.
    </div>
    ";

     //redirect ke halaman awal
     header("location:index.php");
}