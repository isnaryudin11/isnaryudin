<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into barang (id_barang,nama)values(
'".$_POST['id_barang']."',
'".$_POST['nama']."')");

if($query_input){
header('location:view_barang.php');
}else{
}
}
?>
<h4>INPUT BARANG </h4>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>id_barang</td>
		<td><input type="number" name="id_barang" class="form-control"></td>
	</tr>
	<tr>
		<td>nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>