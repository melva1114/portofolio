<?php
include 'koneksi.php';

$id = $_POST['id_lgn'];
$email = $_POST['email'];
$pass = $_POST['pass'];

mysqli_query($koneksi,"update login set email='$email', pass='$pass' where id_lgn='$id'");
header("location:index.php");
?>