<!DOCTYPE html>
<html>
<head>
	<title>Tambah Mahasiswa</title>
</head>
<body>
	<a href="index.php">Home</a>
	<form method="post" action="proses_add.php">
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="NIM" required></td>
			</tr>
			<tr>
				<th>Nama</th>
				<td>:</td>
				<td><input type="text" name="Nama" required></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" value="Submit"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="reset" value="Reset"></td>
			</tr>
		</table>
	</form>

	<?php

    if(isset($_POST['Submit'])) {
    	$nim=$_POST['NIM'];
        $nama=$_POST['Nama'];

        include_once("koneksi.php");

        $result = mysqli_query($mysqli, "INSERT INTO mahasiswa(nim, nama) VALUES ('$nim','$nama')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>

</body>
</html>