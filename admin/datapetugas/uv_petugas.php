<?php
include '../../config/koneksi.php';
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM petugas where id_petugas='$id'"); 
while($row= mysqli_fetch_array($sql)){
    ?> 
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">EDIT DATA PETUGAS</h4>
            </div>
            <div class="modal-body">
                <form action="datapetugas/u_petugas.php" name="modal-popup" method="POST">
                   <div class="form-group">
                    <label class="control-label">ID PETUGAS</label>
                    <input type="text" class="form-control" name="id_petugas" value="<?php echo $row['id_petugas'];?>" readonly>
                </div>
                <div class="form-group">
                    <label class="control-label">NAMA PETUGAS</label>
                    <input type="text" class="form-control" name="nama_petugas" value="<?php echo $row['nama_petugas'];?>">
                </div>
                <div class="form-group">
                    <label class="control-label">USERNAME</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $row['username'];?>">
                </div>
                <div class="form-group">
                    <label class="control-label">NO TELEPON</label>
                    <input type="text" class="form-control" name="telp" value="<?php echo $row['telp'];?>">
                </div>

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >RUBAH</button>
            </div>

        </form>
        <?php
    }
    ?>
</div>
</div>
</div>