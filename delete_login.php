<?php
include 'koneksi.php';

$id = $_GET['id]'];

mysqli_query($koneksi,"delete from login where id_lgn='$id'");
header("location:index.php");
?>