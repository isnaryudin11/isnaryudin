<?php
include("koneksi.php");

//ambil data
$Get2 = mysqli_query($koneksi,"select * from katagori");
$count2 = mysqli_num_rows($Get2);

//ambil data
$Get3 = mysqli_query($koneksi,"select * from satuan");
$count3 = mysqli_num_rows($Get3);


if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into barang (id_barang,nama,id_katagori,id_satuan,harga)values(
'".$_POST['id_barang']."',
'".$_POST['nama']."',
'".$_POST['id_katagori']."',
'".$_POST['id_satuan']."',
'".$_POST['harga']."')");

if($query_input){
header('location:view_barang.php');
}else{
}
}
include('header.php');
?>
<h5 class="card-title">Input Barang</h5>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>Nama Barang</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
	<tr>
		<td>Katagori</td>
      <div class="col-md-4">
        <td><select id="inputState" class="form-select" placeholder="Isi Qty">
        <option value="#">Pilihan</option>
					<?php while($tampil=mysqli_fetch_array($Get2)) {?>
        <option value="<?=$tampil['id_katagori'];?>"><?=$tampil['nama'];}?></option>
				</select></td>
      </div>
	</tr>
	<tr>
  <td>Katagori</td>
      <div class="col-md-4">
        <td><select id="inputState" class="form-select" placeholder="Isi Qty">
        <option value="">Pilihan</option>
					<?php while($tampil=mysqli_fetch_array($Get3)) {?>
        <option value="<?=$tampil['id_satuan'];?>"><?=$tampil['nama'];}?></option>
				</select></td>
      </div>
  <tr>
	<td>Harga</td>
		<td><input type="number" name="harga" class="form-control"></td>
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
<?php
include('footer.php');