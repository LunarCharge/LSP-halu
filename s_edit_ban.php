<?php
include 'koneksi.php';
$no_urut=$_POST['no_urut'];
$no_surat=$_POST['no_surat'];
$jenis_arsip=$_POST['jenis_arsip'];
$tahun=$_POST['tahun'];
$jumlah=$_POST['jumlah'];
$tingkat_perkembangan=$_POST['tingkat_perkembangan'];
$keterangan=$_POST['keterangan'];

$simpan=mysqli_query($koneksi, "UPDATE tb_ban SET no_urut='no_urut', no_surat='$no_surat', jenis_arsip='$jenis_arsip', tahun='$tahun', jumlah='$jumlah', tingkat_perkembangan='$tingkat_perkembangan', keterangan='$keterangan' WHERE no_urut='$no_urut'");

if($simpan) {
  header('location:ban.php');

}
?>