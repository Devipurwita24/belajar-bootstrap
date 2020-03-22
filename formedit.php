<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/css/bootstrap.css">
</head>
<body>

<?php

include './koneksi.php';

$id = $_GET['id_penduduk'];

$query = "SELECT * FROM data_penduduk WHERE id_penduduk = '$id'";

$result = $connect->query($query);

$row = mysqli_fetch_assoc($result);
?>
<h1 align="teks-center">edit data</h1>
<div class="container">
<form action="updatependuduk.php" method="post">
  <table class="table" width="60%"  center>
    <tr class="table-danger">
        <td>NIK</td>
        <td>:</td>
        <td><input type="text" name="nik" placeholder="nik" value="<?php echo $row['nik'];?>" required></td>
    </tr>
    <tr class="table-success">
        <td>nama</td>
        <td>:</td>
        <td><input type="text" name="nama" placeholder="nama" value="<?php echo $row['nama'];?>"></td>
    </tr>
    <tr class="table-info">
        <td>daerah</td>
        <td>:</td>
        <td><input type="text" name="daerah" placeholder="daerah" value="<?php echo $row['daerah'];?>"></td>
    </tr>
    <tr class="table-warning">
        <td>asal daerah</td>
        <td>:</td>
        <td><input type="text" name="asal_daerah" placeholder="asal daerah" value="<?php echo $row['asal_daerah'];?>"></td>
    </tr>
    <tr class="table-active">
        <td><a href="datapenduduk.php"><input type="submit" name="submit" value="simpan" require></a></td>
    </tr>

</table>
</form>
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="./assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/js/bootstrap.js"></script>

</body>
</html>