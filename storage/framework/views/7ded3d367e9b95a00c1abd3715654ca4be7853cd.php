<?php $__env->startSection('title-block'); ?>
  Все комментарии
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="starter-template">
  <h1>Все комментарии</h1>
    <div class="row">
      <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-info">
          <h3> Номер id: <?php echo e($contact->id); ?></h3>
          <p> Комментарий:<?php echo e($contact->subject); ?></p>
          <p> Оценка:<?php echo e($contact->message); ?></p>
          <p> Продукт id :<?php echo e($contact->product_id); ?></p>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  <a href="<?php echo e(route('add-form', $product->id)); ?>"><button
  class="btn btn-warning">Добавить комментарий</button></a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\nev-project-ver-6.x\resources\views/messages.blade.php ENDPATH**/ ?>