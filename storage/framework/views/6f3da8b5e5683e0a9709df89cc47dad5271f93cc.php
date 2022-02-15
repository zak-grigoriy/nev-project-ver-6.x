<?php $__env->startSection('title-block'); ?>
  Новый комментарий
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="starter-template">
  <h1>Новый комментарий</h1>
    <div class="row">
      <br>
      <form action="<?php echo e(route('addcomment-form')); ?>" method="post">
      <?php echo csrf_field(); ?>
      <div class="form-group">
        <label for="name">Введите комментарий</label>
        <input type="text" name="subject" placeholder="Введите комментарий"
        id="subject" class-"form-control">
      </div>
      <br>
      <div class="form-group">
        <p>Введите оценку от 1 до 5:</p>
        <p><input type="number" size="3" name="message" min="1" max="5"
        value="5"></p>
      </div>
      <div class="form-group">
        <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>" >
      </div>
      <br>
      <div class="form-group">
        <button type="submit" class="btn btn-success">Сохранить</button>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\nev-project-ver-6.x\resources\views/addform.blade.php ENDPATH**/ ?>