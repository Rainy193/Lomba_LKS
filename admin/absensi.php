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
      <title>Tabel | Dokter</title>
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
   <body class="sidebar-main-active right-column-fixed">
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

         <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dokter</h1>

            
              <a href="absen_tambah.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data
              </a>
        
          </div>

            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Absensi Siswa</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Table Absensi Siswa</p>
                           <div class="table-responsive">
                              <table id="datatable" class="table table-striped table-bordered" >
                              <thead>
                         <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Kehadiran</th>
                            <th>Jurusan</th>
                            <th style="width = 20%;">Aksi</th>
                        </tr>
                    </thead>
               <tbody>
  <?php $ids =       1; ?>
                        <?php foreach ($absensi as $absen): ?>
                            <tr>
                                <td class="text-center"><?= $ids++; ?></td>
                                <td class="text-center"><?= $absen['nama']; ?></td>
                                <td class="text-center"><?= $absen['kelas']; ?></td>
                                <td class="text-center"><?= $absen['Jurusan']; ?></td>
                                <td class="text-center"><?= $absen['kehadiran']; ?></td>
                                <td width="20%" class="text-center">
                                    <a href="absen_edit.php?id=<?= $absen['id']; ?>" class="btn btn-info">
                                    <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="absen_delete.php?id=<?= $absen['id']; ?>" class="btn btn-danger"  onclick="return confirmDelete();" title="delete">
                                    <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
               </tbody>
                </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
       <!-- Footer -->

          <?php include '../admin/template_admin/footer.php';?>

          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Peringatan !</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Pilih tombol "Logout" Untuk keluar dari aplikasi.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../login/login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

      <!-- Footer END -->
      <!-- color-customizer -->
       
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

      <script>
    function confirmDelete() {
      return confirm("Apakah Anda yakin ingin menghapus data dokter ini?");
    }
  </script>

   </body>
</html>