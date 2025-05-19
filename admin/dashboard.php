 <?php
 include '../config/controller.php';

$absensi = select(" SELECT * FROM absensi");

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