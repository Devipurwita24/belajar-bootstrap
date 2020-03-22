<?php
include './koneksi.php';

$id = $_GET['id_penduduk'];

$query = "DELETE FROM data_penduduk ";

$result=$connect->query($query);
$num = mysqli_affected_rows($connect);

if($num>0){
    echo "berhasil hapus data";
}else{
    echo "gagal hapus data";
}

echo "<a href='tabelpenduduk.php'>lihat data</a>";
?>