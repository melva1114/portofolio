<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIMELO</title>
</head>
<body>
    <h2>DAFTAR LOGIN</h2>
    <br/>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/>
    <h3>EDIT DAFTAR LOGIN</h3>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from login where id_lgn='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="ubah_login.php">
            <table>
                <tr>
                    <td>EMAIL/NO.TLPN</td>
                    <td>
                        <input type="hidden" name="id_lgn" value="<?php echo $d['id_lgn']; ?>">
                        <input type="text" name="email" value="<?php echo $d['email']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>PASSWORD</td>
                    <td><input type="password" name="pass" value="<?php echo $d['pass']; ?>"></td>    
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                    <input type="hidden" name="id_lgn" value="<?php echo $d['id_lgn']; ?>">
                </tr>
            </table>
        </form>
        <?php
    }
    ?>
</body>
</html>