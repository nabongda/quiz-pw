<?php

include_once("koneksi.php");

?>

<html>
<head>    
    <title>Data Mahasiswa</title>
    <style type="text/css">
    	td{
    		text-align: center;
    	}
    </style>
</head>
<body>
    <h2>Data Mahasiswa</h2><br>
    <form method="post" action="index.php">
        <table width='80%' border=1>
            <tr>
                <th>No</th><th>Nomor Induk Mahasiswa</th><th>Nama Mahasiswa</th>
            </tr>
            <?php  
                $No=1;
                while($user_data = mysqli_fetch_array($result)) {         
                    echo "<tr>";
                    echo "<td>".$No."</td>";
                    echo "<td>".$user_data['NIM']."</td>";
                    echo "<td>".$user_data['Nama']."</td>";
                }
            ?>
            </table><br>
            <td><a href="add.php">Tambah Data</a></td>
    </form>
</body>
</html>