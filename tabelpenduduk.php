<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/css/bootstrap.css">
</head>
<body>
    <center><h1>data penduduk</h1>
    <div class="container">
        <table width='80%' border=1 class="teks-center">
            <tr>
                <th class="table-success">NIK</th>
                <th class="table-success">nama</th>
                <th class="table-success">daerah</th>
                <th class="table-success">asal daerah</th>
                <th class="table-success" colspan="2">aksi</th>
            </tr>
            <?php
            include 'koneksi.php';
            $query="SELECT* FROM data_penduduk";
            $sql=mysqli_query($connect,$query);
            while($data = mysqli_fetch_array($sql)){
                echo "<tr>";
                echo "<td>".$data['nik']."</td>";
                echo "<td>".$data['nama']."</td>";
                echo "<td>".$data['daerah']."</td>";
                echo "<td>".$data['asal_daerah']."</td>";
                echo "<td><a href='formedit.php?id_penduduk=".$data['id_penduduk']."'>edit</a></td>";
                echo "<td><a href='delete.php?id_penduduk=".$data['id_penduduk']."'onclick='return confirm
                    (\"apakah anda yakin ingin menghapus data?\")'>hapus</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
        </div>
    </center>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="./assets/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/js/bootstrap.js"></script>

</body>
</html>