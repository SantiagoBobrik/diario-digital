<?php $__env->startSection('content'); ?>
<div class="d-flex" id="wrapper">

  <!-- Sidebar -->
  <div class="bg-dark border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-light">Panel de acción</div>
    <div class="list-group list-group-flush">
      <a href="<?php echo e(url('dashboard/noticias')); ?>"
        class=" active list-group-item list-group-item-action bg-dark text-light">Noticias</a>
      <a href="<?php echo e(url('dashboard/anuncios')); ?>"
        class="list-group-item list-group-item-action bg-dark text-light">Anuncios</a>
      <a href="<?php echo e(url('dashboard/categoria')); ?>"
        class="list-group-item list-group-item-action bg-dark text-light">Categorias</a>

    </div>
  </div>
  <!-- /#sidebar-wrapper -->

  <!-- Page Content -->
  <div id="page-content-wrapper">

    <div class="container-fluid">

      <?php echo $__env->yieldContent('container'); ?>

    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->


  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/santiago/Documents/Proyectos/diario-la-informacion/resources/views/layouts/admin.blade.php ENDPATH**/ ?>