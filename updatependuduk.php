<?php
include './koneksi.php';

$id = ['id_penduduk'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$daerah = $_POST['daerah'];
$asal_daerah = $_POST['asal_daerah'];

$query = "UPDATE data_penduduk SET nik='$nik',nama='$nama',daerah='$daerah',
        asal_daerah='$asal_daerah' ";
$result = $connect->query($query);
$num = mysqli_affected_rows($connect);

if($num>0){
    echo "berhasil update data <br>";
    echo "<a href='tabelpenduduk.php'>lihat data</a>";
}else{
    echo "gagal edit data";
}
?>