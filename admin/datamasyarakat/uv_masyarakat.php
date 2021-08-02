<?php
include '../../config/koneksi.php';
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM masyarakat where nik='$id'"); 
while($row= mysqli_fetch_array($sql)){
    ?> 
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">EDIT DATA MASYARAKAT</h4>
            </div>
            <div class="modal-body">
                <form action="datamasyarakat/u_masyarakat.php" name="modal-popup" method="POST">
                   <div class="form-group">
                    <label class="control-label">NIK</label>
                    <input type="text" class="form-control" name="nik" value="<?php echo $row['nik'];?>" readonly>
                </div>
                <div class="form-group">
                    <label class="control-label">NAMA MASYARAKAT</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $row['nama'];?>">
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