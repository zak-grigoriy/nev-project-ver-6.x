<?php $__env->startSection('title', 'Категория'); ?>

<?php $__env->startSection('content'); ?>
  <div class="starter-template">
    <h1> <?php echo e($category->name); ?> <?php echo e($category->products->count()); ?> </h1>
      <p> <?php echo e($category->description); ?> </p>
        <div class="row">
          <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('card', compact('product'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\nev-project-ver-6.x\resources\views/category.blade.php ENDPATH**/ ?>