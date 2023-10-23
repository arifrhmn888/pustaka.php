<?php $module = !empty($_GET['module']) ? $_GET['module'] : ''?>

<?php if ($module == '' or $module == 'home') : ?>
<div class='card'>
                    <div class='card-header'>
                        <h1>Selamat datang di sistem informasi cinema roswile</h1>
                    </div>
                    <div class='card-body'>
                        <p>Your account type is: Administrator</p>
                        <p>Silahkan akses menu untuk menggunakan aplikasi</p>
                    </div>
                </div>
<?php
                elseif($module == 'siswa'):
                //
                include "module/siswa/siswa-view.php";


                //module edit siwa-----//
                elseif ($module == 'edit-siswa'):    
                include "module/siswa/siswa-update.php";

                //module user view-----//
                elseif ($module == 'user'):    
                include "module/user/user-view.php";

                
                 //module buku view-----//
                 elseif ($module == 'buku'):    
                    include "module/buku/buku-view.php";

                    elseif ($module == 'edit-buku'):    
                        include "module/buku/buku-update.php";
endif;
?>