<?php
include 'koneksi.php';

// Periksa apakah parameter id telah diterima
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data dari tabel berdasarkan id
    $sql = "SELECT * FROM crud WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Tampilkan formulir untuk mengupdate data
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #5AB2FF;
            color: #333;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #555;
        }
        form {
            max-width: 600px;
            margin: 20px auto;
            background: #CAF4FF;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border: 1px solid #ddd;
        }
        label {
            color: #666;
            font-size: 14px;
        }
        input[type="text"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 6px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            display: inline-block;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Update Data</h2>
    <form action="proses_update_data.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>"><br><br>

        <label for="judul">Judul:</label><br>
        <input type="text" id="judul" name="judul" value="<?php echo $row['judul']; ?>"><br><br>

        <label for="gambar">Gambar:</label><br>
        <input type="file" id="gambar" name="gambar"><br>
        <img src="uploads/<?php echo $row['gambar']; ?>" alt="<?php echo $row['judul']; ?>" style="max-width: 100px; max-height: 100px;"><br><br>

        <label for="isi">Isi:</label><br>
        <textarea id="isi" name="isi" rows="4" cols="50"><?php echo $row['isi']; ?></textarea><br><br>

        <input type="submit" value="Update Data">
    </form>
</body>
</html>
<?php
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak ditemukan.";
}

$conn->close();
?>
