<?php
include 'koneksi.php';

$daerah = $_POST['daerah'];
$perkebunan = $_POST['perkebunan'];
$pertanian = $_POST['pertanian'];
$peternakan = $_POST['peternakan'];

$query = "INSERT INTO peternakanpertanian (daerah,perkebunan,pertanian.peternakan)
        VALUES ('$daerah','$perkebunan','$pertanian','$peternakan')";
$result =  mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);

if($num>0){
    echo "berhasil tambah presentase";
}else{
    echo "gagal tambah presentase";
}
?>