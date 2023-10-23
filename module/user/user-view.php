<div class='card'>
                    <div class='card-header'>
                        <h1>Data User</h1>
                    </div>
                    <div class='card-body'>
                       
                        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#userModal">
      Tambah Data User
    </button>
   
    <table class="table table-bordered">
      <thead>
        <th>No.</th>
        <th>Nama User</th>
        <th>username</th>
        <th>level</th>
        <th>aksi</th>
      </thead>
      <tbody>
      <?php
                //query select data siswa
                $no = 1;
                $query = "SELECT * FROM muda_user";
                $conn = mysqli_query($connection, $query);
                while ($data = mysqli_fetch_array($conn)) {    
                ?>

                <tr>
                  <td><?=$no;?></td>
                  <td><?=$data['nama_user'];?></td>
                  <td><?=$data['username'];?></td>
                  <td><?=$data['level'];?></td>
                
                <td>
                  <a href=""class="btn btn-danger">Hapus</a>
                </td>
               </tr>
               <?php
               $no++;
               }
               ?>
      </tbody>
    </table>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="module/user/aksi.php?module=user&act=insert" method="post">
              <!-- data user -->
              <div class="mb-3">
                <label for="nama-user" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_user" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="NISN" class="form-label">Jurusan</label>
                <select name="level" class="form-select">
                  <option value="">-Pilih level</option>
                  <option value="admin">administrator</option>
                  <option value="user">user</option>

                </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
        </div>

      </div>

    </div>