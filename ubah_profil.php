<?php
include 'koneksi.php';

$id = $_POST['idp'];
$nama = $_POST['nama']
$email = $_POST['email'];
$pass = $_POST['pw'];
$alamat = $_POST['alamat'];
$tgl = $_POST['tgl'];
$foto = addcslashesa($_FILES['foto'],['tmp_name']);

mysqli_query($koneksi,"update profil set nama='$nama', email='$email', pw='$pass', alamat='$alamat', tgl='$tgl', foto='{$foto}' where idp='$id'");
header("location:index.php");
?>