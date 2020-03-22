<?php
include './koneksipertanian.php';

$daerah = $_POST['daerah'];
$pertanian = $_POST['pertanian'];
$peternakan = $_POST['peternakan'];

$query = "INSERT INTO peternakan (daerah,pertanian,peternakan)
        VALUES ('$daerah','$pertanian','$peternakan')";
$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);

if($num>0){
    echo "berhasil tambah persentase <br>";
    echo "<a href='tabelpertanian.php'>lihat data</a>";
}else{
    echo "gagal";
}
?>