<?php
include ("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan</title>
</head>
<body>
    <table border="1">
        <button>
            <a href="index.php">Back</a>
        </button>
        <tr>
            <td>No</td>
            <td>Nama User</td>
            <td>Jabatan</td>
            <td>Nama Bahan</td>
            <td>Jenis Bahan</td>
            <td>Stok</td>
            <td>Harga</td>
            <td>Kondisi</td>
            <td>Tanggal Masuk</td>
            <td>Aksi</td>
        </tr>
        <?php
        include ("koneksi.php");
        $query=mysqli_query($db,"SELECT * FROM tb_user INNER JOIN tb_bahan ON tb_user.id_bahan=tb_bahan.id_bahan");

        while($bahan=mysqli_fetch_array($query)){
            echo"<tr>";
                 echo"<td>".$bahan['id_user']."</td>";
                 echo"<td>".$bahan['nama_user']."</td>";
                 echo"<td>".$bahan['jabatan']."</td>";
                 echo"<td>".$bahan['nama_bahan']."</td>";
                 echo"<td>".$bahan['jenis_bahan']."</td>";
                 echo"<td>".$bahan['stok']."</td>";
                 echo"<td>".$bahan['harga']."</td>";
                 echo"<td>".$bahan['kondisi']."</td>";
                 echo"<td>".$bahan['tgl_masuk']."</td>";
                 echo"<td>";
                 echo "<button><a href='edit.php?id=".$bahan['id_user']."'>Edit</a></button> |";
                 echo "<button><a href='hapus.php?id=".$bahan['id_user']."'>hapus</a></button>";
                echo "</td>";
                 echo"</tr>"; 
                       
        }
        ?>
    </table>
    <button>
            <a href="tambah.php">Tambah</a>
        </button>
</body>
</html>