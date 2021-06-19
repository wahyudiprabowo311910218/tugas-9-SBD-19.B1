<html>
<head>
	<title>Add Mahasiswa</title>
</head>
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nim</td>
				<td><input type="text" name="Nim"></td>
			</tr>
			<tr> 
				<td>Nama_Mhs</td>
				<td><input type="text" name="Nama_Mhs"></td>
			</tr>
			<tr> 
				<td>Tgl_Lahir</td>
				<td><input type="text" name="Tgl_Lahir"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="Alamat"></td>
			</tr>
			<tr> 
				<td>Jenis_Kelamin</td>
				<td><input type="text" name="Jenis_Kelamin"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	<?php
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$Nim = $_POST['Nim'];
		$Nama_Mhs = $_POST['Nama_Mhs'];
		$Tgl_Lahir = $_POST['Tgl_Lahir'];
		$Alamat = $_POST['Alamat'];
		$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
		
		// include database connection file
		include_once("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO mahasiswa(Nim,Nama_Mhs,Tgl_Lahir,Alamat,Jenis_Kelamin) VALUES('$Nim','$Nama_Mhs','$Tgl_Lahir','$Alamat','$Jenis_Kelamin')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>