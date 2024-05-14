<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = $_POST['pw'];
$alamat = $_POST['alamat'];
$tgl = $_POST['tgl'];
$foto = addcslashes($_FILES['foto'],['tmp_name']);

mysqli_query($koneksi,"insert into profil values('','$nama','$email','$pass','$alamat','$tgl','{$foto}')");
header("location:index.php");
?>