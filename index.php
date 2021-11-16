<?php
session_start();
$login=$_SESSION['login'];
if($login == 1)

{
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
 <title>login</title>
 <style>
 body { font-family: verdana; font-size: 12px; }
 a { text-decoration: none; color: blue; }
 a:hover { color: green; }
 </style>
</head>
<body>
<h1 align="center">LOGIN BERHASIL</h1>
<hr>
<a href="view_barang.php">barang</a> | 
<a href="view_katagori.php">katagori</a> | 
<a href="logout.php">Logout</a> | 
<hr>
<?php 
$username = $_SESSION['username'];

echo "<h2>Selamat Datang ($username)</h2> ";
?>
<hr>
</body>
</html>
<?php
} else {
    include('login.php');
} 
?>