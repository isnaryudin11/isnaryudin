<?php
include "koneksi.php";
$query_view=mysqli_query($koneksi,"select * from katagori");

?>
<table class="table" border="1">
    <tr>
        <td>No</td>
        <td>id_katagori</td>
        <td>nama</td>
    </tr>
<?php
$no=1;
while($tampil=mysqli_fetch_array($query_view)) {?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil['id_katagori'];?></td>
        <td><?php echo $tampil['nama'];?></td>
   </tr>
<?php }?>
</table>