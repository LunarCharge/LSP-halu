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

   <!-- Codingan Navigation Bar -->
    <title>Office Center </title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success  fixed-top">
    <img src="dist/img/bkad.png" width="80" height="70" class="bkad me-3">
    <a class="navbar-brand text-white" href="#">SELAMAT DATANG ADMIN | <B>BKAD </B></a>
  
    <form class="form-inline my-2 my-lg-0 ml-auto"></form>

     <!-- Link LeftBar-->
</nav>
<div class="row no-gutters mt-5">
  <div class="col-md-2 bg-dark mt-2 pr-3 pt-4" style="height: 100vh">
    <ul class=" nav flex-column ml-3 mb-5 bg-s">
    <li class="nav-item mt-5">
      <a class="nav-link text-white" href="se.php">SE</a>
    </li>
    <li class="nav-item my-2">
      <a class="nav-link text-white" href="bpa.php">BPA</a>
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

  <!-- Title Dashboard --> 
  <div class="col-md-10 p-5 pt-5">
    <h3><i class="fas fa-home-alt ms-2"></i>Dashboard<hr>

      <!-- Codingan Card SE,BPA,BAN -->
      <div class="row text-white">
      <div class="card bg-success mr-3" style="width: 18rem;">
        <div class="card-body">
          <div class="card-body-icon">
            
          </div>
          <h5 class="card-title">Jumlah Berkas SE </h5>
          <div class="display-2"><i class="fas fa-book"></i></div>
           
        
          <a href="se.php"><p class="card=text text-white">Lihat Detail<i class="fas fa-angle-double-right me-2"></i></p></a>
  
          
        </div>
      </div>
       <div class="card bg-success ml-2" style="width: 18rem;">
        <div class="card-body">
          <div class="card-body-icon">
          </div>
          <h5 class="card-title">Lihat Berkas BPA </h5>
           <div class="display-2"><i class="fas fa-book"></i></div>
           
        
          <a href="bpa.php"><p class="card=text text-white">Lihat Detail<i class="fas fa-angle-double-right me-2"></i></p></a>
          </div>
      </div>
          
        <div class="card bg-success ml 5" style="width: 18rem;">
        <div class="card-body">
          <div class="card-body-icon">
           
          </div>

          <h5 class="card-title">Lihat Berkas BAN </h5>
           <div class="display-2"><i class="fas fa-book"></i></div>
           
        
          <a href="ban.php"><p class="card=text text-white">Lihat Detail<i class="fas fa-angle-double-right me-2"></i></p></a>
          
          <!-- Link Social Media -->
        </div>
      </div>
    </div>
      <div class="row mt-4">
        <div class="card ml-5 text-white text-center"  style="width: 18rem;">
          <div class="card-header bg-danger display-4 pt-2 pb-2">
            <i class="fab fa-instagram"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title text-danger">INSTAGRAM</h5>
            <a href="https://instagram.com/bkadkotabogor?igshid=MDE2OWE1N2Q=" class="btn btn-danger">FOLLOW</a>
          </div>
        </div>
         <div class="card ml-5 text-white text-center"  style="width: 18rem;">
          <div class="card-header bg-success display-4 pt-2 pb-2">
            <i class="fa-brands fa-whatsapp"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title text-success">WHATSAPP</h5>
            <a href="https://api.whatsapp.com/send/?phone=6281918846511&text&type=phone_number&app_absent=0" class="btn btn-success">MESSAGE</a>
          </div>
        </div>
         <div class="card ml-5 text-white text-center"  style="width: 18rem;">
          <div class="card-header bg-primary display-4 pt-2 pb-2">
            <i class="fa-brands fa-facebook"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title text-primary">FACEBOOK</h5>
            <a href="https://www.facebook.com/bkad.pwk" class="btn btn-primary">LIKE</a>
          </div>
        </div>
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