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
       <li class="nav-item my-2">
      <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
    </li>
    
    <li class="nav-item my-2">
      <a class="nav-link text-white" href="se.php">SE</a>
    </li>
    <li class="nav-item my-2">
      <a class="nav-link text-white" href="ban.php">BAN</a>
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

                <h3>Tambah Arsip BPA</h3>
                <form method="post" action="">

                <div class="form-group">
                  <label>No</label>
                  <input type="text" name="no_urut" class="form-control">
                </div>

                <div class="form-group">
                  <label>No Surat</label><br>
                  <input type="text" name="no_surat" class="form-control">
                </div>
 
                <div class="form-group">
                  <label>Jenis Arsip</label><br>
                  <input type="text" name="jenis_arsip" class="form-control">
                </div>

                <div class="form-group">
                  <label>Unit Pencipta</label><br>
                  <input type="text" name="unit_pencipta" class="form-control">
                </div>

                <div class="form-group">
                    <label>Tahun</label><br>
                    <input type="year" name="tahun" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jumlah</label><br>
                    <input type="text" name="jumlah" class="form-control">
                </div>

                <div class="form-group">
                    <label>Tingkat Perkembangan</label><br>
                    <input type="text" name="tingkat_perkembangan" class="form-control">
                </div>

                <div class="form-group">
                    <label>Keterangan</label><br>
                    <input type="text" name="keterangan" class="form-control">
                </div>                

                <br>
                <button type="submit" name="simpan" value="simpan" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form></div></div>
              <?php
              include 'koneksi.php';
              if (isset($_POST['simpan'])) {
                  $insert = mysqli_query($koneksi, "INSERT INTO tb_bpa VALUES(
                    '".$_POST['no_urut']."',
                    '".$_POST['no_surat']."',
                    '".$_POST['jenis_arsip']."',
                    '".$_POST['unit_pencipta']."',
                    '".$_POST['tahun']."',
                    '".$_POST['jumlah']."',
                    '".$_POST['tingkat_perkembangan']."',
                    '".$_POST['keterangan']."')");
                  if ($insert) {
                      echo 'berhasil tersimpan';
                  }else{
                    echo 'gagal menyimpan';
                  }
              }
              ?>
  


    

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