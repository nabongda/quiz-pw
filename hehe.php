    // Check connection
    if (!$koneksi){
        die("Connection Failed : " . mysqli_connect_error());
    }
    $sql = "SELECT * from user where username='$_POST['username']' and password='$_POST['pass']'";
    $result = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($result) > 0) {
        header('Location:login.php');
    } else {
        echo "Login gagal!";
    }
    mysqli_close($koneksi);
?>

    // Check connection
    if (!$koneksi){
        die("Connection Failed : " . mysqli_connect_error());
    }
    $sql = "SELECT * from user where username='$_POST['username']' and password='$_POST['pass']'";
    $result = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($result) > 0) {
        header('Location:login.php');
    } else {
        echo "Login gagal!";
    }
    mysqli_close($koneksi);