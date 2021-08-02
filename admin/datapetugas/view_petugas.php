<?php
include "../config/koneksi.php";

$query = "SELECT * FROM petugas"; 
$result = mysqli_query($conn, $query);
?>
<div class="box">
  <div class="box-header">
    <h3>DATA PETUGAS</h3>
    <br>
    <a class="btn btn-primary" data-toggle="modal" href='#tambahdata'>Tambah Data</a>
  </div>

  <div class="box-body">
   <table id="example" class="table table-hover">
    <thead>
      <tr>
        <th>ID PETUGAS</th>
        <th>NAMA PETUGAS</th>
        <th>USERNAME</th>
        <th>LEVEL</th>
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($row = mysqli_fetch_assoc($result)) {

        ?>
        <tr>
          <td><?php echo $row['id_petugas'];?></td>
          <td><?php echo $row['nama_petugas'];?></td>
          <td><?php echo $row['username'];?></td>
          <td><?php echo $row['level'];?></td>
          <td>
            <a href="" class="btn btn-info editpetugas" id="<?php echo $row['id_petugas'];?>" data-toggle="modal" data-target="#editpetugas">Edit</a>

            <a href="?menu=9&id=<?php echo $row['id_petugas'];?>" class="btn btn-warning">Ubah Password</a>

            <a href="datapetugas/d_petugas.php?id=<?php echo $row['id_petugas'];?>" class="btn btn-danger" onclick="return confirm('Yakin Data Akan di Hapus ??');">Hapus</a>
          </td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>

</div>


<div class="modal fade" id="tambahdata">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">TAMBAH DATA PETUGAS</h4>
      </div>
      <div class="modal-body">
        <form action="datapetugas/cr_petugas.php" method="POST" role="form">
        
          <div class="form-group">
            <label for="">Nama Petugas</label>
            <input type="text" class="form-control" name="nama_petugas" required>
          </div>

          <div class="form-group">
            <label for="">Username</label>
            <input type="text" class="form-control" name="username" required>
          </div>

          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" required>
          </div>

          <div class="form-group">
            <label for="">No Telepon</label>
            <input type="text" class="form-control" name="telp" required>
          </div>

          <div class="form-group">
            <label for="">level</label>
            <select class="form-control" name="level" required>
              <option value="admin">admin</option>
              <option value="petugas">petugas</option>
            </select>
          </div>
      
         
        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editpetugas">
  
</div>
