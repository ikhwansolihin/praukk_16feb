<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("location:tampil.php?");
}
   $id=$_GET['id'];
   $sql="SELECT * FROM tb_user INNER JOIN
   tb_bahan WHERE tb_user.id_user='$id'";
   $query= mysqli_query($db, $sql);
   $ganti= mysqli_fetch_assoc($query);

   if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
   }
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengedit</title>
</head>
<body>
<form action="proses_edit.php" method="POST">
        <fieldset>
        <input type="hidden" name="id" value="<?php echo $ganti['id_user']?>" />
            <p>
                <label for="nama_user">Nama User :</label>
                <input type="text" name="nama_user"  value="<?php echo $ganti['nama_user']?>" />
            </p>
            <p>
            <label for="jabatan">jabatan</label>
            <input type="text"name="jabatan" value="<?php echo $ganti['jabatan']?>" />
           </p>
           <p>
            <label for="nama_bahan">nama bahan</label>
            <input type="text"name="nama_bahan" value="<?php echo $ganti['nama_bahan']?>" />
           </p>
           <p>
            <label for="jenis_bahan">jenis bahan</label>
            <input type="text"name="jenis_bahan" value="<?php echo $ganti['jenis_bahan']?>" />
           </p>
           <p>
            <label for="stok">stok</label>
            <input type="number"name="stok" value="<?php echo $ganti['stok']?>" />
           </p>
           <p>
            <label for="harga">harga</label>
            <input type="number"name="harga" value="<?php echo $ganti['harga']?>" />
           </p>
           <p>
            <label for="kondisi">kondisi</label>
            <select name="kondisi" id="id">
              <option value="baik<?php echo $ganti['kondisi']?>">baik</option>
              <option value="rusak<?php echo $ganti['kondisi']?>">rusak</option>
            </select>
           </p>
           <p>
            <label for="tgl_masuk">tgl_masuk</label>
            <input type="date"name="tgl_masuk" value="<?php echo $ganti['tgl_masuk']?>" />
           </p>
           <p>
            <input type="submit" name="edit" value="edit">
           </p>

        </fieldset>
        <button>
        <a href="tampil.php">Back</a>
        </button>
</body>
</html>