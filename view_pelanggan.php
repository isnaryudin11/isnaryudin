<?php
include "koneksi.php";
$query_view=mysqli_query($koneksi,"select * from pelanggan");


include('header.php');
?>

</br>
<h4>DATA PELANGGAN </h4>
<a href="input_pelanggan.php" class="btn btn-primary">tambah barang</a>
<a href="index.php" class="btn btn-danger">logout</a>
 

<table class="table table-striped" border="1">
    <tr>
        <td>No</td>
        <td>id_pelanggan</td>
        <td>nama_pelanggan</td>
        <td>no_tlp</td>
        <td>status</td>
        <th colspan="3">Action</th>
    </tr>
<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)) {?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil['id_pelanggan'];?></td>
        <td><?php echo $tampil['nama_pelanggan'];?></td>
        <td><?php echo $tampil['no_tlp'];?></td>
        <td><?php echo $tampil['status'];?></td>
        <td><a href="edit_barang.php?id_barang=<?php echo $tampil['id_barang'];?>"class="btn btn-warning">edit</a></td>
        <td><a href="hapus_barang.php?id_barang=<?php echo $tampil['id_barang'];?>"class="btn btn-danger">hapus</a></td>
   </tr>
<?php }?>
</table>
<?php
include('footer.php');