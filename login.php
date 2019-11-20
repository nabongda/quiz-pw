<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

if (!$koneksi){
        die("Connection Failed : " . mysqli_connect_error());
    }
    $sql = "SELECT * from login where username='$username' and password='$password'";
    $result = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($result) > 0) {
        header('Location:login.php');
    } else {
        echo "Login gagal!";
    }
    mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Mahasiswa</title>
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>			
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 
	if (isset($_POST['submit'])) {
		header('Location:index.php');
	}
	else{
		echo "GAGAL MASUK!";
	}
 ?>