<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into barang (id_barang,nama)values(
'".$_POST['id_katagori']."',
'".$_POST['nama']."')");

if($query_input){
header('location:view_barang.php');
}else{
}
}
?>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>id_katagori</td>
		<td><input type="text" name="id_katagori" class="form-control"></td>
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