<?php
session_start();
$email = $_SESSION['email'];
if (!isset($email)){
header("Location\:login.php");
}

?>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$current_page = 'dashboard';
?>

<?php
session_start();
$current_page = 'presensi';
?>

<!DOCTYPE html>

<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../theme/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../theme/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../theme/dist/css/adminlte.min.css">

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

```
<?php include '../components/navbar.php' ?>
<?php include '../components/sidebar.php' ?>
```

<!--content wrapper-->

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <!-- row dengan margin-top -->
      <div class="row mt-5">
        <!-- col 4 lebar, dimajuin 2 kolom (offset 2) -->
        <div class="col-md-4 offset-md-1">
          <h3 class="mb-4">Presensi Hari Ini</h3>

```
      <form action="proses_presensi.php" method="post" class="mb-3">
        <input type="hidden" name="status" value="hadir">
        <button type="submit" class="btn btn-success btn-lg" style="width: 50%;">Hadir</button>
      </form>

      <form action="proses_presensi.php" method="post" class="mb-3">
        <input type="hidden" name="status" value="ijin">
        <button type="submit" class="btn btn-warning btn-lg" style="width: 50%;">Izin</button>
      </form>

      <form action="proses_presensi.php" method="post">
        <input type="hidden" name="status" value="sakit">
        <button type="submit" class="btn btn-danger btn-lg" style="width: 50%;">Sakit</button>
      </form>
    </div>
  </div>
</div>


  </div>
</div>
<!--content wrapper-->

<!-- Main Footer -->
<?php include '../components/footer.php' ?>


  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->

  <script src="../theme/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap 4 -->

  <script src="../theme/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- DataTables  & Plugins -->

  <script src="../theme/plugins/datatables/jquery.dataTables.min.js"></script>

  <script src="../theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

  <script src="../theme/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>

  <script src="../theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

  <script src="../theme/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>

  <script src="../theme/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

  <script src="../theme/plugins/jszip/jszip.min.js"></script>

  <script src="../theme/plugins/pdfmake/pdfmake.min.js"></script>

  <script src="../theme/plugins/pdfmake/vfs_fonts.js"></script>

  <script src="../theme/plugins/datatables-buttons/js/buttons.html5.min.js"></script>

  <script src="../theme/plugins/datatables-buttons/js/buttons.print.min.js"></script>

  <script src="../theme/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <!-- AdminLTE App -->

  <script src="../theme/dist/js/adminlte.min.js"></script>

  <script>
    $(function () {
      $("#example100").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>

</body>

</html> dari kode ini semisal kita klik button hadir, itu nanti ada muncul tambahan button kirim dibawah button sakit, faham ndak? 
