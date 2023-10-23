<div class="card">
    <div class="card-header">
        <h3>Data Buku</h3>
    </div>
    <div class="card-body">
        <?php
        
        if(!empty($_SESSION['alert'])):
            echo $_SESSION['alert'];
        endif;
        unset($_SESSION['alert']);
        ?>
        <!-- Tombol tambah data siswa -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary px-5 mb-3" data-bs-toggle="modal" data-bs-target="#bukuModal">
            Tambah Data Buku
        </button>
        <!-- bagian table -->
        <table class="table table-striped">
            <thead>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Jenis Buku</th>
                <th>Stok</th>
            </thead>
            <tbody>
                <?php
                //query select data buku
                $no = 1;
                $query = "SELECT * FROM muda_buku";
                $conn = mysqli_query($connection, $query);
                while ($data = mysqli_fetch_array($conn)) {
                    ?>
                    <!-- fetch data buku -->
                    <tr>
                        <td>
                        <?= $no++ ?>
                        </td>
                        <td>
                            <?= $data['judul_buku']; ?>
                        </td>
                        <td>
                            <?= $data['pengarang']; ?>
                        </td>
                        <td>
                            <?= $data['penerbit']; ?>
                        </td>
                        <td>
                            <?= $data['tahun_terbit']; ?>
                        </td>
                        <td>
                            <?= $data['jenis_buku']; ?>
                        </td>
                        <td>
                        <a href="?module=edit-buku&id=<?=$data['isbn']; ?>" class="btn btn-warning">Edit</a>
                        <a href="module/buku/aksi.php?module=buku&act=delete&id=<?= $data['isbn']; ?>" onclick="return confirm ('Yakin dek mau hapusss data <?= $data['judul_buku']; ?>') " class="btn btn-danger">HAPUS</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="bukuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> tambah data siswa ciek da

                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="module/buku/aksi.php?module=buku&act=insert" method="post">
                    <!-- form input data siswa -->
                    <div class="mb-3">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="text" name="isbn" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="judul_buku" class="form-label">Judul Buku</label>
                        <input type="text" name="judul_buku" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="pengarang" class="form-label">Pengarang</label>
                        <input type="text" name="pengarang" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                        <input type="text" name="tahun_terbit" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_buku" class="form-label">Jenis_buku</label>
                        <input type="text" name="jenis_buku" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>
                    
                    

                   
                    
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!--modal hapus siswa-->
<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>