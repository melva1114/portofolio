<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIMELO</title>
</head>
<body>
    <h2>DAFTAR PROFIL</h2>
    <br/>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/>
    <h3>EDIT DAFTAR PROFIL</h3>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from profil where idp='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="ubah_profil.php">
        <table>
                <tr>
                    <td>NAMA</td>
                    <td>
                        <input type="hidden" name="idp" value="<?php echo $d['idp']; ?>">
                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>EMAIL</td>
                    <td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>    
                </tr>
                <tr>
                    <td>PASSWORD</td>
                    <td><input type="password" name="pw" value="<?php echo $d['pw']; ?>"></td>    
                </tr>
                <tr>
                    <td>ALAMAT</td>
                    <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>    
                </tr>
                <tr>
                    <td>TANGGAL LAHIR</td>
                    <td><input type="date" name="tgl" value="<?php echo $d['tgl']; ?>"></td>    
                </tr>
                <tr>
                    <td>FOTO PROFIL</td>
                    <td><input type="file" name="foto" value="<?php echo $d['foto']; ?>"></td>    
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                    <input type="hidden" name="idp" value="<?php echo $d['idp']; ?>">
                </tr>
            </table>
        </form>
        <?php
    }
    ?>
</body>
</html>