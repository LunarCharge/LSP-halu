<?php
include "koneksi.php";
$no_urut=$_GET['no_urut'];
$hapus=mysqli_query($koneksi, "DELETE FROM tb_bpa WHERE no_urut=$no_urut");
if ($hapus) {
	header('location:bpa.php');
}
?>