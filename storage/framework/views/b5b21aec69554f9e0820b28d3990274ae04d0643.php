<?php $__env->startSection('title', 'Главная страница'); ?>

<?php $__env->startSection('content'); ?>

<div class="starter-template">
  <h1>Все объявления</h1>
    <br>
  <div>
    <?php echo $__env->make('paginac', compact('product'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\nev-project-ver-6.x\resources\views/index.blade.php ENDPATH**/ ?>