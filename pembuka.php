<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
   
  <div class="container">
  <h2>TAMBAH DATA PENDUDUK</h2>
  <form action="datapenduduk.php" method="post">
  <table class="table">
    <tr class="table-danger">
        <td>NIK</td>
        <td>:</td>
        <td><input type="text" name="nik" placeholder="nik" required></td>
    </tr>
    <tr class="table-success">
        <td>nama</td>
        <td>:</td>
        <td><input type="text" name="nama" placeholder="nama" required></td>
    </tr>
    <tr class="table-info">
        <td>daerah</td>
        <td>:</td>
        <td><input type="text" name="daerah" placeholder="daerah" required></td>
    </tr>
    <tr class="table-warning">
        <td>asal daerah</td>
        <td>:</td>
        <td><input type="text" name="asal_daerah" placeholder="asal daerah" required></td>
    </tr>
    <tr class="table-active">
        <td><a href="datapenduduk.php"><input type="submit" name="submit" value="simpan" require></a></td>
    </tr>

</table>
</form>
    
      
        
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="./assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/js/bootstrap.js"></script>

</body>
</html>