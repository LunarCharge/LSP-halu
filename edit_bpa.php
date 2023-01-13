<?php
include "koneksi.php";
$no_urut=$_GET['no_urut'];
$sql = "SELECT * FROM tb_bpa WHERE no_urut =$no_urut";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>
<!doctype html>
<html lang="en">
  <heead>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
   <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <title>Office Center </title>
  </head>
  <body>
   <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top" style="height: 57px;">
    <form class="form-inline my-2 my-lg-0 ml-auto"></form>
</nav>
<div class="row no-gutters mt-5">
  <div class="col-md-2 bg-dark mt-2 pr-3 pt-4" style="height: 100vh">
    <ul class=" nav flex-column ml-3 mb-5 bg-s">
       <li class="nav-item mb-3">
      <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
    </li>
    <li class="nav-item my-2">
      <a class="nav-link text-white" href="se.php">SE</a>
    </li>
    <li class="nav-item my-2">
      <a class="nav-link text-white" href="bpa.php">BPA</a>
    </li>
   
    <li class="nav-item my-2">
      <a class="nav-link text-white" href="ba.php">BA</a>
    </li>
    <li class="nav-item my-2">
      <a class="nav-link text-white" href="sp2d.php">SP2D</a>
    </li>
    <li class="nav-item my-2">
      <a class="nav-link text-white" href="logout.php">LogOut</a>
    </li>
    </ul>
  </div>
<div class="col-md-10 p-5 pt-5">
                <h3>Edit Arsip BPA</h3>
                <form method="post" action="s_edit_bpa.php">

                <div class="form-group">
                  <input type="hidden" name="no_urut" value="<?php echo $data['no_urut']?>" class="form-control">
                </div>


                <div class="form-group">
                  <label>No Surat</label><br>
                  <input type="text" name="no_surat" value="<?php echo $data['no_surat']?>" class="form-control">
                </div>
 
                <div class="form-group">
                  <label>Jenis Arsip</label><br>
                  <input type="text" name="jenis_arsip" value="<?php echo $data['jenis_arsip']?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Unit Pencipta</label><br>
                  <input type="text" name="unit_pencipta" value="<?php echo $data['unit_pencipta']?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Tahun</label><br>
                    <input type="year" name="tahun" value="<?php echo $data['tahun']?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jumlah</label><br>
                    <input type="text" name="jumlah" value="<?php echo $data['jumlah']?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Tingkat Perkembangan</label><br>
                    <input type="text" name="tingkat_perkembangan" value="<?php echo $data['tingkat_perkembangan']?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Keterangan</label><br>
                    <input type="text" name="keterangan" value="<?php echo $data['keterangan']?>" class="form-control">
                </div>                


                <button type="submit" name="simpan" value="simpan" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form></div>
</div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    -->
  </body>
</html>