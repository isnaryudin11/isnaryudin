<?php
include "koneksi.php";
$query_view=mysqli_query($koneksi,"select * from satuan");

//ambil data
$Get1 = mysqli_query($koneksi,"select * from satuan");
$count1 = mysqli_num_rows($Get1);

include('header.php');
?>

</br>
<h4>DATA PELANGGAN </h4>
<a href="input_satuan.php" class="btn btn-primary">tambah barang</a>
<a href="index.php" class="btn btn-danger">logout</a>
 

<table class="table table-striped" border="1">
    <tr>
        <td>No</td>
        <td>id_satuan</td>
        <td>nama</td>
        <th colspan="3">Action</th>
    </tr>
<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)) {?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil['id_satuan'];?></td>
        <td><?php echo $tampil['nama'];?></td>
        <td><a href="edit_barang.php?id_barang=<?php echo $tampil['id_barang'];?>"class="btn btn-warning">edit</a></td>
        <td><a href="hapus_barang.php?id_barang=<?php echo $tampil['id_barang'];?>"class="btn btn-danger">hapus</a></td>
   </tr>
<?php }?>
</table>
<?php
include('footer.php');