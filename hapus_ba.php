<?php
include "koneksi.php";
$no_urut=$_GET['no_urut'];
$hapus=mysqli_query($koneksi, "DELETE FROM tb_ba WHERE no_urut=$no_urut");
if ($hapus) {
	header('location:ba.php');
}
?>