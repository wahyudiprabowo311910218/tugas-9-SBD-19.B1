<?php
// include database connection file
include_once("koneksi.php");
 
// Get id from URL to delete that user
$Nim = $_GET['Nim'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE Nim=$Nim");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>
