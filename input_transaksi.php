<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into transaksi (id_transaksi,nama_transaksi,tgl_transaksi,harga,qty,id_barang,diskon,id_pelanggan)values(
'".$_POST['id_transaksi']."',
'".$_POST['nama_transaksi']."',
'".$_POST['tgl_transaksi']."',
'".$_POST['harga']."',
'".$_POST['qty']."',
'".$_POST['id_barang']."',
'".$_POST['diskon']."',
'".$_POST['id_pelanggan']."')");

if($query_input){
header('location:view_transaksi.php');
}else{
}
}
include('header.php');
?>
<h4>INPUT TRANSAKSI </h4>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>nama_transaksi</td>
		<td><input type="text" name="nama_transaksi" class="form-control"></td>
	</tr>
	<tr>
		<td>tgl_transaksi</td>
		<td><input type="date" name="tgl_transaksi" class="form-control"></td>
	</tr>
	<tr>
		<td>harga</td>
		<td><input type="number" name="harga" class="form-control"></td>
	</tr>
    <tr>
		<td>qty</td>
        <td>
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Isi Qty">
            </div>
            <div class="col-md-4">
                <select id="inputState" class="form-select" placeholder="Isi Qty">
                    <option selected>Pilih...</option>
                    <option>Kg</option>
                    <option>Pcs</option>
                </select>
            </div>
        </td>
	</tr>
    <tr>
		<td>id_pelanggan</td>
		<td><input type="text" name="id_pelanggan" class="form-control"></td>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>
<?php
include('footer.php');