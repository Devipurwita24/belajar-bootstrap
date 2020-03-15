<?php
include './koneksi.php';

$nik = $_GET['nik'];

$query = "DELETE FROM data_penduduk WHERE nik=$nik";

$result=$connect->query($query);
$num = mysqli_affected_rows($connect);

if($num>0){
    echo "berhasil hapus data";
}else{
    echo "gagal hapus data";
}

echo "<a href='index.php'>lihat data</a>";
?>