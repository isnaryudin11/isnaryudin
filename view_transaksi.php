<?php
include "koneksi.php";
$query_view=mysqli_query($koneksi,"select * from transaksi");


//ambil data
$Get1 = mysqli_query($koneksi,"select * from pelanggan");
$count1 = mysqli_num_rows($Get1);

include('header.php');
?>

</br>
<h4>DATA PELANGGAN </h4>
 

<table class="table table-striped" border="1">
    <tr>
        <td>No</td>
        <td>id_transaksi</td>
        <td>nama_transaksi</td>
        <td>tgl_transaksi</td>
        <td>harga</td>
        <td>qty</td>
        <td>id_barang</td>
        <td>diskon</td>
        <td>id_pelanggan</td>
    </tr>
<?php
$no=1;

while($tampil=mysqli_fetch_array($query_view)) {?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil['id_transaksi'];?></td>
        <td><?php echo $tampil['nama_transaksi'];?></td>
        <td><?php echo $tampil['tgl_transaksi'];?></td>
        <td><?php echo $tampil['harga'];?></td>
        <td><?php echo $tampil['qty'];?></td>
        <td><?php echo $tampil['id_barang'];?></td>
        <td><?php echo $tampil['diskon'];?></td>
        <td><?php echo $tampil['id_pelanggan'];?></td>
   </tr>
<?php }?>
</table>
<?php
include('footer.php');