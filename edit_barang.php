<?php
include ("koneksi.php");
if(isset($_POST['save'])){
$query_edit=mysqli_query($koneksi," update barang SET
    id_barang='".$_POST['id_barang']."',
    nama='".$_POST['nama']."'
    WHERE id_barang='".$_POST['id_barang']."'");
if($query_edit){
    header("location:view_barang.php");
}else{
    echo mysqli_error ();
}
}

$tampil=mysqli_query($koneksi,"select * from barang where id_barang='".$_GET['id_barang']."'");
$hasil_data=mysqli_fetch_array($tampil);

include('header.php');
?>

<form method="POST">
<table class="table table-bordered" border="1">
    <input type ="hidden" name="id_barang" value="<?php echo $hasil_data['id_barang'];?>">
    <tr>
        <td>id_barang</td>
        <td><input type="text" name="id_barang" class="form-control" value="<?php echo $hasil_data['id_barang'];?>"></td>
    </tr>
    <tr>
         <td>nama</td>
         <td><input type="text" name="nama" class="form-control" value="<?php echo $hasil_data['nama'];?>"></td>
    <tr>
        <td><input type="submit" class="btn btn-success" value="Rubah Barang" name="save"></td>
    </tr>
</table>
</form>
<?php
include('footer.php');
