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
    <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
    <form class="form-inline my-2 ms-2 my-lg-0 ml-auto "></form>
     <form class="d-flex" role="search" method="get" action="">
     <label for="cari"></label>
     <input class="form-control mr-sm-2 ms-2" name="cari" type="search" placeholder="Search" aria-label="Search">
     <button type="submit" style="border: none; background: transparent; width: 40px; height: 40px;"><i class="fa-solid fa-magnifying-glass" style="color: white;"></i></button>
     </form>

      
  </div>
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
  <div class="col-md-5 p-5 pt-5">
    <h3><i class="fas fa-book mx-2"></i>Berkas BAN<hr>
     <a href="tambah_ban.php" class=" btn btn-primary mb-3"><i class="fas fa-plus-square mx-2"></i>TAMBAH DATA BERKAS</a>
     <table class ="table table-striped table-bordered" ><br>
       <thead>
         <tr>
           <th scope="col">No</th> 
           <th scope="col">No Surat</th>
           <th scope="col">Jenis Arsip</th>
           <th scope="col">Unit Pencipta</th>
           <th scope="col">Tahun</th>
           <th scope="col">Jumlah</th>
           <th scope="col">Tingkat Perkembangan</th>
           <th scope="col">Keterangan</th>
           <th scope="col">Aksi</th>
         </tr>
       </thead>
       <tbody>
<?php
include 'koneksi.php';
$no= 1;
$tampil = mysqli_query($koneksi, "SELECT * FROM tb_ban ");

if (isset($_GET['cari'])) {
  $tampil = mysqli_query($koneksi, "SELECT * FROM tb_ban WHERE no_surat LIKE '%". $_GET['cari']. "%'");
}

while($data = mysqli_fetch_array($tampil)){
?>
<tr style="text-align: center; ">
    <td><?php echo $no++; ?></td>
    <td><?php echo $data['no_surat'];?></td>
    <td><?php echo $data['jenis_arsip'];?></td>
    <td><?php echo $data['unit_pencipta'];?></td>
    <td><?php echo $data['tahun'];?></td>
    <td><?php echo $data['jumlah'];?></td>
    <td><?php echo $data['tingkat_perkembangan'];?></td>
    <td><?php echo $data['keterangan'];?></td>
    <td>
        <a href= "edit_ban.php?no_urut='<?php echo $data['no_urut']?>'" i class="fa-solid fa-pen-to-square mx-1" style="color: green" data-toggle="tolltip" title="Edit">
      <a href="hapus_ban.php?no_urut='<?php echo $data['no_urut']?>'" i class="fa-solid fa-trash mx-1" style="color: red" data-toggle="tolltip" title="Delete"></i>
<?php
}
?>
       </tbody>
     </table> 

  
      </div>
    </div>

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