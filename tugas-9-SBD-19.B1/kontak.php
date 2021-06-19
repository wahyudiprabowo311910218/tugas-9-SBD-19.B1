<?php
include("koneksi.php");
// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		 			form p > label {
						 display: inline-block;
						 width: 100px;
		 			}
						 form input[type="text"], form textarea {
						 border: 1px solid #197a43;
		 			}
						 form input[type="submit"] {
						 border: 1px solid #197a43;
						 background-color: #197a43;
						 color: #ffffff;
						 font-weight: bold;
						 padding: 5px 15px;
					 }
				</style>
	<title>Kontak</title>
</head>
<body>
	<div class="container">
		<header>
			<h1>Lanjutan Tugas 8 Basis Data (CRUD)</h1>
		</header>
		<nav>
			<a href="index.php">Home</a>
			<a href="https://github.com/wahyudiprabowo311910218/tugas-8-SBD-19.B1">Tentang</a>
			<a href="kontak.php">Kontak</a>
		</nav>
		<section id="hero">
			<br>
			<fieldset>
			<h2>Contact Me</h2>
			<form action="#" method="post">
			<p>
				<label for="nama">Nama</label>
				<input type="text" id="nama" name="nama" placeholder="Masukan Nama Anda">
			</p>
			<p>
				<label for="message">Message</label>
				<input type="text" id="message" name="message" placeholder="message anda">
			</p>
			<p>
				<label for="email">Email</label>
				<input type="text" id="email" name="email" placeholder="email anda">
			</p>
			<p>
				<label for="alamat">Address</label>
				<input type="text" id="alamat" name="alamat" placeholder="alamat">
			</p>
			<p><input type="submit" name="submit"></p>
			</form>
		</fieldset>
	</section>
</div>
	<footer>
			<p>&copy; 2021, Informatika, Universitas Pelita Bangsa</p>
		</footer>
</body>
</html>