<?php 
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

//cek data
$sql = "SELECT * FROM user WHERE username='$username' ";
$qry = mysqli_query($koneksi,$sql);
$usr = mysqli_fetch_array($qry);
if( 
  md5($username) ==md5($usr['username'])
  AND
  md5($password) ==md5($usr['password'])
   )
{
 $_SESSION['iduser']   = $usr['iduser'];
 $_SESSION['username'] = $usr['username'];
 $_SESSION['login']    = 1;
 $pesan = "Login berhasil, selamat datang $username";
} else {
 $pesan = "Login gagal, username atau password anda salah!";
}

?>
<script>
 alert('<?php echo $pesan;?>');
 location='index.php';
</script>