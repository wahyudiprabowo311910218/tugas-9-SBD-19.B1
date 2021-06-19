<?php
include("koneksi.php");
// query untuk menampilkan data
$sql = 'SELECT * FROM mahasiswa';
$result = mysqli_query($mysqli, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Homepage</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Tugas 9 Basis Data (CRUD)</h1>
        </header>
    <br>
            <fieldset>
        <h2>Tabel Mahasiswa</h2>
        <a href="add.php">add mahasiswa</a>
        <br><br>
            <div class="main">
            <table>
                <tr>
                    <th>Nim</th>
                    <th>Nama_Mhs</th>
                    <th>Tgl_Lahir</th>
                    <th>Alamat</th>
                    <th>Jenis_Kelamin</th>
                    <th>Update</th>
                </tr>
                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $row['Nim'];?></td>
                    <td><?= $row['Nama_Mhs'];?></td>
                    <td><?= $row['Tgl_Lahir'];?></td>
                    <td><?= $row['Alamat'];?></td>
                    <td><?= $row['Jenis_Kelamin'];?></td>
                    <td>
                        <a href="edit.php?Nim=<?php echo $row['Nim']; ?>">Edit</a>
                        <a href="delete.php?Nim=<?php echo $row['Nim']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
                <?php endif; ?>
            </table>
            </div>
            </fieldset>
            </div>
</body>
</html>