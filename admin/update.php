<?php

include 'koneksi.php';

$no_ktp = $_POST['no_ktp'];
$nama = $_POST['nama'];
$no_tlp = $_POST['no_tlp'];
$thn_msk = $_POST['thn_msk'];
$jml_masa_krj = $_POST['jml_masa_krj'];

mysqli_query($koneksi, "update karyawan set no_ktp='$no_ktp', nama='$nama', no_tlp='$no_tlp', thn_msk='$thn_msk', jml_masa_krj='$jml_masa_krj' where id='$id'");

header("location:karyawan.php");