<?php $__env->startSection('title', 'Домашняя страница'); ?>

<?php $__env->startSection('content'); ?>

  <div class="starter-template">
    <h1>Мои объявления</h1>      
    <div class="row">
      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
        $user_id = Auth::id();
        ?>
        <?php if($product->user_id === $user_id ): ?>
        <?php echo $__env->make('auth.card', compact('products', 'contacts'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
 </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\nev-project-ver-6.x\resources\views/auth/index.blade.php ENDPATH**/ ?>