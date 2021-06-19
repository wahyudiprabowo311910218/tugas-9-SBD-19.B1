<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$Nim = $_POST['Nim'];
	
	$Nama_Mhs=$_POST['Nama_Mhs'];
	$Tgl_Lahir=$_POST['Tgl_Lahir'];
	$Alamat=$_POST['Alamat'];
	$Jenis_Kelamin=$_POST['Jenis_Kelamin'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE mahasiswa SET Nama_Mhs='$Nama_Mhs',Tgl_Lahir='$Tgl_Lahir',Alamat='$Alamat',Jenis_Kelamin='$Jenis_Kelamin' WHERE Nim=$Nim");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$Nim = $_GET['Nim'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE Nim=$Nim");
 
while($user_data = mysqli_fetch_array($result))
{
	$Nama_Mhs = $user_data['Nama_Mhs'];
	$Tgl_Lahir = $user_data['Tgl_Lahir'];
	$Alamat = $user_data['Alamat'];
	$Jenis_Kelamin = $user_data['Jenis_Kelamin'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
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
				<td><input type="hidden" name="Nim" value=<?php echo $_GET['Nim'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>