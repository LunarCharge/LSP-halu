<?php
include "koneksi.php";
$no_urut=$_GET['no_urut'];
$hapus=mysqli_query($koneksi, "DELETE FROM tb_se WHERE no_urut=$no_urut");
if ($hapus) {
	header('location:se.php');
}
?>