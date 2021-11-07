<?php
    include("koneksi.php");
$query_delete=mysqli_query($koneksi,"delete from katagori where id_katagori='".$_GET['id_katagori']."'");
if($query_delete){
    header("location:view_katagori.php");
}else{
    echo mysqli_error ();
}
?>
