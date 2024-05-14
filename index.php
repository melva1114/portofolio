<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIMELO</title>
</head>
<body>
    <a href="tambah_login.php">+ TAMBAH LOGIN</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>EMAIL/NO.TLPN</th>
            <th>PASSWORD</th>
            <th>OPSI</th>
        </tr>

        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from login");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['pass']; ?></td>
                <td>
                    <a href="update_login.php?id=<?php echo $d['id_lgn']; ?>">UPDATE</a>
                    <a href="delete_login.php?id=<?php echo $d['id_lgn']; ?>">DELETE</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br/>

    <a href="tambah_profil.php">+ TAMBAH PROFIL</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>ALAMAT</th>
            <th>TANGGAL LAHIR</th>
            <th>FOTO PROFIL</th>
            <th>OPSI</th>
        </tr>

        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from profil");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['pw']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['tgl']; ?></td>
                <td><?php echo $d['foto']; ?></td>
                <td>
                    <a href="update_profil.php?id=<?php echo $d['idp']; ?>">UPDATE</a>
                    <a href="delete_profil.php?id=<?php echo $d['idp']; ?>">DELETE</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>