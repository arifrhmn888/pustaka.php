<?php
$isbn = $_GET['id'];

$query = "SELECT * FROM muda_buku WHERE isbn= '$isbn'";
$conn = mysqli_query($connection, $query);
$data = mysqli_fetch_array($conn);

?>

<div class='card'>
                    <div class='card-header'>
                        <h1>EDIT DATA BUKU</h1>
                    </div>
                    <div class='card-body'>
                      <h4>edit data buku</h4>
                      <form action="module/buku/aksi.php?module=buku&act=update
                      "method="post">
                          <div class="mb-3">
                            <label for="isbn" class="form-label">ISBN</label>
                            <input type="text" name="isbn" value="<?= $data['isbn']; ?>" class="form-control" readonly>
                          </div>
                          <div class="mb-3">
                            <label for="judul_buku" class="form-label">Judul Buku</label>
                            <input type="text" name="judul_buku" value="<?= $data['judul_buku']; ?>" class="form-control"required>
                          </div>
                          <div class="mb-3">
                            <label for="pengarang" class="form-label">pengarang</label>
                            <input type="text" name="pengarang" value="<?= $data['pengarang']; ?>" class="form-control"required>
                          </div>
                          <div class="mb-3">
                            <label for="penerbit" class="form-label">penerbit</label>
                            <input type="text" name="penerbit" value="<?= $data['penerbit']; ?>" class="form-control"required>
                          </div>
                          <div class="mb-3">
                            <label for="tahun_terbit" class="form-label">Tahun terbit</label>
                            <input type="text" name="tahun_terbit" value="<?= $data['tahun_terbit']; ?>" class="form-control"required>
                          </div>

                          <div class="mb-3">
                            <label for="pengarang" class="form-label">jenis_buku</label>
                            <input type="text" name="jenis_buku" value="<?= $data['jenis_buku']; ?>" class="form-control"required>
                          </div>

                          

                          <div class="mb-3">
                            <label for="pengarang" class="form-label">stok</label>
                            <input type="text" name="stok" value="<?= $data['stok']; ?>" class="form-control"required>
                          </div>

                         
                       

                        
                          <div>
                            <a href="?module=siswa" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-primary">update dayat</button> 
                          </div>
                            </form>
                            </div>
                            </div>
                      </form>
                    </div>
                </div>