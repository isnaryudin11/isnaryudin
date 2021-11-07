<?php
include ("koneksi.php");
if(isset($_POST['save'])){
$query_edit=mysqli_query($koneksi," update katagori SET
    id_katagori='".$_POST['id_katagori']."',
    nama='".$_POST['nama']."'
    WHERE id_katagori='".$_POST['id_katagori']."'");
if($query_edit){
    header("location:view_katagori.php");
}else{
    echo mysqli_error ();
}
}

$tampil=mysqli_query($koneksi,"select * from katagori where id_katagori='".$_GET['id_katagori']."'");
$hasil_data=mysqli_fetch_array($tampil);
?>

<form method="POST">
<table class="table table-bordered" border="1">
    <input type ="hidden" name="id_katagori" value="<?php echo $hasil_data['id_katagori'];?>">
    <tr>
        <td>id_katagori</td>
        <td><input type="text" name="id_katagori" class="form-control" value="<?php echo $hasil_data['id_katagori'];?>"></td>
    </tr>
    <tr>
         <td>nama</td>
         <td><input type="text" name="nama" class="form-control" value="<?php echo $hasil_data['nama'];?>"></td>
    <tr>
        <td><input type="submit" value="rubah data" name="save"> </td>
    </tr>
</table>
</form>
