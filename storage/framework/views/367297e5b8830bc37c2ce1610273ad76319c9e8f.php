<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $__env->yieldContent('title'); ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset("admin/plugins/fontawesome-free/css/all.min.css")); ?>" >
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet"  href="<?php echo e(asset("admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")); ?>  ">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset("admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css")); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo e(asset("admin/plugins/jqvmap/jqvmap.min.css")); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset("admin/dist/css/adminlte.min.css")); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(asset("admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset("admin/plugins/daterangepicker/daterangepicker.css")); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo e(asset("admin/plugins/summernote/summernote-bs4.min.css")); ?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo e(asset("admin/dist/img/AdminLTELogo.png")); ?>" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
   <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
  <ul>
   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(route('admin')); ?>" class="brand-link">
      <img src="<?php echo e(asset("admin/dist/img/AdminLTELogo.png")); ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Админ панель</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo e(asset("admin/dist/img/user2-160x160.jpg")); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Админ</a>
          <a href="<?php echo e(route('main')); ?>" class="d-block">На главную</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <!---
    
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> 
        </ul>--->
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <?php echo $__env->yieldContent('content'); ?>
    
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo e(asset("admin/plugins/jquery/jquery.min.js")); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset("admin/plugins/jquery-ui/jquery-ui.min.js")); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset("admin/plugins/bootstrap/js/bootstrap.bundle.min.js")); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo e(asset("admin/plugins/chart.js/Chart.min.js")); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo e(asset("admin/plugins/sparklines/sparkline.js")); ?>"></script>
<!-- JQVMap -->
<script src="<?php echo e(asset("admin/plugins/jqvmap/jquery.vmap.min.js")); ?>"></script>
<script src="<?php echo e(asset("admin/plugins/jqvmap/maps/jquery.vmap.usa.js")); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset("admin/plugins/jquery-knob/jquery.knob.min.js")); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo e(asset("admin/plugins/moment/moment.min.js")); ?>"></script>
<script src="<?php echo e(asset("admin/plugins/daterangepicker/daterangepicker.js")); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(asset("admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")); ?>"></script>
<!-- Summernote -->
<script src="<?php echo e(asset("admin/plugins/summernote/summernote-bs4.min.js")); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(asset("admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset("admin/dist/js/adminlte.js")); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset("admin/dist/js/demo.js")); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset("admin/dist/js/pages/dashboard.js")); ?>"></script>

<script>
      var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>
</body>
</html>
<?php /**PATH C:\OpenServer\domains\turnir\resources\views/admin/admin_layout.blade.php ENDPATH**/ ?>