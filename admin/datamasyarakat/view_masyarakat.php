<?php
include "../config/koneksi.php";
include "../config/autonumber.php";

$query = "SELECT * FROM masyarakat"; 
$result = mysqli_query($conn, $query);
?>
<div class="box">
  <div class="box-header">
    <h3>DATA MASYARAKAT</h3>
  </div>

  <div class="box-body">
   <table id="example" class="table table-hover">
    <thead>
      <tr>
        <th>NIK</th>
        <th>NAMA</th>
        <th>USERNAME</th>
        <th>NO TELEPON</th>
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($row = mysqli_fetch_assoc($result)) {

        ?>
        <tr>
          <td><?php echo $row['nik'];?></td>
          <td><?php echo $row['nama'];?></td>
          <td><?php echo $row['username'];?></td>
          <td><?php echo $row['telp'];?></td>
          <td>
            <a href="" class="btn btn-info editmasyarakat" id="<?php echo $row['nik'];?>" data-toggle="modal" data-target="#editmasyarakat">Edit</a>

             <a href="?menu=8&id=<?php echo $row['nik'];?>" class="btn btn-warning">Ubah Password</a>

            <a href="datamasyarakat/d_masyarakat.php?id=<?php echo $row['nik'];?>" class="btn btn-danger" onclick="return confirm('Yakin Data Akan di Hapus ??');">Hapus</a>
          </td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>

</div>

<div class="modal fade" id="editmasyarakat">
  
</div>