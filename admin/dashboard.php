 <?php
 include '../config/controller.php';

function getCount($status) {
    global $db;
    $query = mysqli_query($db, "SELECT COUNT(*) as total FROM absensi WHERE kehadiran = '$status'");
    $data = mysqli_fetch_assoc($query);
    return $data['total'];
}
$jumlahSiswa  = mysqli_num_rows(mysqli_query($db, "SELECT * FROM absensi"));
$hadir = getCount('Hadir');
$sakit = getCount('Sakit');
$izin  = getCount('Izin');

?>


 
 
 
 <!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Peliharaan - Pengelola Data Peliharaan</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="../assets/images/logo.png" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="../assets/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="../assets/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="../assets/css/responsive.css">

      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
      
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
        <?php include '../admin/template_admin/sidebar.php'; ?>
         <!-- TOP Nav Bar -->
         <?php include '../admin/template_admin/navbar.php'; ?>
         <!-- TOP Nav Bar END -->
          
         <!-- Page Content  -->

          <div id="content-page" class="content-page">
                
                <div class="container-fluid">
                <div class="row content-body">

    <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> <!-- Judul halaman dashboard -->
                    </div>

    <!-- Content Row -->
    <div class="row">

<!-- Jumlah Hadir -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Jumlah Hadir</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php echo $hadir; ?>
                    </div>
                </div>
                <div class="col-auto">
                    <!-- <i class="fas fa-check-circle fa-2x text-gray-300"></i> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jumlah Izin -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Izin</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php echo $izin; ?>
                    </div>
                </div>
                <div class="col-auto">
                    <!-- <i class="fas fa-user-clock fa-2x text-gray-300"></i> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jumlah Sakit -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Jumlah Sakit</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php echo $sakit; ?>
                    </div>
                </div>
                <div class="col-auto">
                    <!-- <i class="fas fa-user-injured fa-2x text-gray-300"></i> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jumlah Alpha -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Jumlah Siswa</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php echo $jumlahSiswa; ?>
                    </div>
                </div>
                <div class="col-auto">
                    <!-- <i class="fas fa-user-times fa-2x text-gray-300"></i> -->
                </div>
            </div>
        </div>
    </div>
</div>


   <div id="content-page" class="content-page">
            
            <div class="container-fluid">
               <div class="row content-body">   
               
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
     
    <?php include '../admin/template_admin/footer.php';?>


      <!-- Footer END -->

      <!-- color-customizer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/js/popper.min.js"></script>
      <script src="../assets/js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="../assets/js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="../assets/js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="../assets/js/waypoints.min.js"></script>
      <script src="../assets/js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="../assets/js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="../assets/js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="../assets/js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="../assets/assets/js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="../assets/js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="../assets/js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="../assets/js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="../assets/js/lottie.js"></script>
      <!-- am core JavaScript -->
      <script src="../assets/js/core.js"></script>
      <!-- am charts JavaScript -->
      <script src="../assets/js/charts.js"></script>
      <!-- am animated JavaScript -->
      <script src="../assets/js/animated.js"></script>
      <!-- am kelly JavaScript -->
      <script src="../assets/js/kelly.js"></script>
      <!-- am maps JavaScript -->
      <script src="../assets/js/maps.js"></script>
      <!-- am worldLow JavaScript -->
      <script src="../assets/js/worldLow.js"></script>
      <!-- Style Customizer -->
      <script src="../assets/js/style-customizer.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="../assets/js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="../assets/js/custom.js"></script>
   </body>
</html>