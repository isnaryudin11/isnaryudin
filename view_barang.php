<?php
include "koneksi.php";
$query_view=mysqli_query($koneksi,"select * from barang");

?>
</br>
<h4>DATA BARANG </h4>
<a href="input_barang.php" class="btn btn-danger">tambah katagori</a>
<table class="table table-bordered" border="1">
    <tr>
        <td>No</td>
        <td>id_barang</td>
        <td>nama</td>
        <th colspan="3">Action</th>
    </tr>
<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)) {?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil['id_barang'];?></td>
        <td><?php echo $tampil['nama'];?></td>
        <td><a href="edit_barang.php?id_barang=<?php echo $tampil['id_barang'];?>">edit</a></td>
        <td><a href="hapus_barang.php?id_barang=<?php echo $tampil['id_barang'];?>">hapus</a></td>
   </tr>
<?php }?>
</table>