<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('assets/images/logos/favicon.png')); ?>" />
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/styles.min.css')); ?>" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <?php echo $__env->yieldContent('content'); ?>
        
        <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
      </div>
    </div>
  </div>
  <script src="<?php echo e(asset('assets/libs/jquery/dist/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/sidebarmenu.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/app.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/libs/apexcharts/dist/apexcharts.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/libs/simplebar/dist/simplebar.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/dashboard.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\febry\penjualan\resources\views/index.blade.php ENDPATH**/ ?>