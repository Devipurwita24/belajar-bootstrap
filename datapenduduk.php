<?php
include 'koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$daerah = $_POST['daerah'];
$asal_daerah = $_POST['asal_daerah'];

$query = "INSERT INTO data_penduduk (nik,nama,daerah,asal_daerah)
          VALUES ('$nik','$nama','$daerah','$asal_daerah')";
$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);

if($num > 0){
    
    echo "<a href='tabelpenduduk.php'>lihat data</a>";
}else{
    echo "gagal menambah penduduk";
}

?>
