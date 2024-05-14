<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from profil where idp='$id'");
header("location:index.php");
?>