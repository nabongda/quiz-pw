<?php
$nim=$_POST['NIM'];
$nama=$_POST['Nama'];

include_once("koneksi.php");

$result = mysqli_query($mysqli, "INSERT INTO mahasiswa(nim, nama) VALUES ('$nim','$nama')");

header("location:index.php");
?>