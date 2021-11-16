<?php
include "koneksi.php";
$query_view=mysqli_query($koneksi,"select * from katagori");

?>
</br>
<a href="input_katagori.php" class="btn btn-danger">tambah katagori</a>
<a href="index.php" class="btn btn-danger">logout</a>
<table class="table table-bordered" border="1">
    <tr>
        <td>No</td>
        <td>id_katagori</td>
        <td>nama</td>
        <td colspsn="2"> Action</td>
    </tr>
<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)) {?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil['id_katagori'];?></td>
        <td><?php echo $tampil['nama'];?></td>
        <td><a href="edit_katagori.php?id_katagori-<?php echo $tampil['id_katagori'];?>">edit</a></td>
        <td><a href="hapus_katagori.php?id_katagori-<?php echo $tampil['id_katagori'];?>">hapus</a></td>
   </tr>
<?php }?>
</table>