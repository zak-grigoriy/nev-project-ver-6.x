<?php $__env->startSection('title-block'); ?>
  Все объявления
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-12">
  <h1>Редактировать объявление</h1>
    <form method="POST" enctype="multipart/form-data"
    action="<?php echo e(route('products.update', $product)); ?>">
    <div>
      <?php if(isset($product)): ?>
        <?php echo method_field('PUT'); ?>
      <?php endif; ?>
      <?php echo csrf_field(); ?>
    <div class="input-group row">
      <label for="code" class="col-sm-4 col-form-label">Код: </label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="code" id="code"
          value="<?php if(isset($product)): ?><?php echo e($product->code); ?><?php endif; ?>">
        </div>
    </div>
      <br>
    <div class="input-group row">
      <label for="name" class="col-sm-3 col-form-label">Название: </label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="name" id="name"
          value="<?php if(isset($product)): ?><?php echo e($product->name); ?><?php endif; ?>">
        </div>
    </div>
      <br>
    <div class="input-group row">
      <label for="description" class="col=cm-3 col-form-label">Описание:</label>
        <div class="col-cm-6">
          <textarea name="description" id="description" cols="72"
          rows="7"><?php if(isset($product)): ?><?php echo e($product->description); ?><?php endif; ?></textarea>
        </div>
    </div>
      <br>
    <div class="input-group row"
      <label for="image" class="col-sm-3 col-form-label">Картинка: </label>
        <div class="col-sm-12">
          <label class="btn btn-default btn-file">
          Загрузить <input type="file" style="display: none;" name="image" id="image">
          </label>
        </div>
    </div>
      <button class="btn btn-success">Сохранить</button>
    </div>
  </form>
 </div>
   <br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\nev-project-ver-6.x\resources\views/products/form1.blade.php ENDPATH**/ ?>