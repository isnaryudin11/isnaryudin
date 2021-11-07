<?php
    include("koneksi.php");
$query_delete=mysqli_query($koneksi,"delete from barang where id_barang='".$_GET['id_barang']."'");
if($query_delete){
    header("location:view_barang.php");
}else{
    echo mysqli_error ();
}
echo " data telah di apus";
echo "<meta http-equiv=refresh content=2,URL='view_barang.php'>";
?>
