<?php
include '../config/controller.php';

if (!isset($_GET['id'])) {
    echo "<script>
            alert('ID tidak ditemukan');
            document.location.href = 'absensi.php';
          </script>";
    exit;
}

$id = (int)$_GET['id'];

// Ambil data absensi berdasarkan id
$absen = select("SELECT * FROM absensi WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (update_absen($_POST) > 0) {
        echo "<script>
                alert('Data absensi berhasil diubah');
                document.location.href = 'absensi.php';
              </script>";
    } else {
        echo "<script>
                alert('Data absensi gagal diubah');
                document.location.href = 'absensi.php';
              </script>";
    }
}
?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Edit | Absensi</title>
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

<body id="page-top">
  <div id="wrapper">
    <?php include('template_admin/sidebar.php'); ?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <?php include('template_admin/navbar.php'); ?>
        <div class="container-fluid">
          <div id="content-page" class="content-page">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Edit Data Absensi Siswa</h1>
            </div>

            <form action="" method="POST">
              <input type="hidden" name="id" value="<?= $absen['id']; ?>">

              <div class="mb-3">
                <label for="nama" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="nama" name="nama" required value="<?= htmlspecialchars($absen['nama']); ?>">
              </div>

              <div class="form-group mb-3">
                <label for="kelas">Kelas</label>
                <select class="form-control" id="kelas" name="kelas" required>
                  <option value="" disabled>Pilih Kelas</option>
                  <option value="X" <?= $absen['kelas'] == 'X' ? 'selected' : ''; ?>>X</option>
                  <option value="XI" <?= $absen['kelas'] == 'XI' ? 'selected' : ''; ?>>XI</option>
                  <option value="XII" <?= $absen['kelas'] == 'XII' ? 'selected' : ''; ?>>XII</option>
                </select>
              </div>

              <div class="mb-3">
                <label for="Jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="Jurusan" name="Jurusan" required value="<?= htmlspecialchars($absen['Jurusan']); ?>">
              </div>

              <div class="form-group mb-3">
                <label for="kehadiran">Kehadiran</label>
                <select class="form-control" id="kehadiran" name="kehadiran" required>
                  <option value="" disabled>Pilih Kehadiran</option>
                  <option value="Hadir" <?= $absen['kehadiran'] == 'Hadir' ? 'selected' : ''; ?>>Hadir</option>
                  <option value="Izin" <?= $absen['kehadiran'] == 'Izin' ? 'selected' : ''; ?>>Izin</option>
                  <option value="Sakit" <?= $absen['kehadiran'] == 'Sakit' ? 'selected' : ''; ?>>Sakit</option>
                </select>
              </div>

              <button type="submit" class="btn btn-primary" name="ubah">Simpan</button>
              <a href="absensi.php" class="btn btn-secondary">Batal</a>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
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
