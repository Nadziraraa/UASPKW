<?php
require_once './Koneksi.php';

$no_ktp = $_POST['no_ktp'];
$nama = $_POST['nama'];
$no_tlp = $_POST['no_tlp'];
$thn_msk = $_POST['thn_msk'];
$jml_masa_krj = $_POST['jml_masa_krj'];

$result = $koneksi->
    query("INSERT INTO karyawan VALUES(0,'$no_ktp', '$nama', '$no_ktp', '$thn_msk', '$jml_masa_krj')");
    if($result){
        header("location:./karyawan.php");
    }else {
        echo $koneksi->error; 
    }
?>