<?php
include 'koneksi.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

mysqli_query($koneksi,"insert into login values('','$email','$pass')");
header("location:index.php");
?>