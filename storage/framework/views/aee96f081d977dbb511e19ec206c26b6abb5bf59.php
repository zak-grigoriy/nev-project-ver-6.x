<?php $__env->startSection('title-block'); ?>
  Добавить категорию
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-12">
  <h1>Добавить категорию</h1>
    <form method="POST" enctype="multipart/form-data"
    action="<?php echo e(route('categories.store')); ?>">
    <div>
      <?php echo csrf_field(); ?>
        <div class="input-group row">
          <label for="code" class="col-sm-2 col-form-label">Код:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="code" id="code" volue="">
            </div>
        </div>
        <br>
        <div class="input-group row">
          <label for="name" class="col-sm-2 col-form-label">Название: </label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="name" id="name" value="">
            </div>
        </div>
        <br>
        <div class="input-group row">
          <label for="description" class="col=cm-2 col-form-label">Описание:</label>
            <div class="col-cm-6">
              <textarea name="description" id="description" cols="72" rows="7"></textarea>
            </div>
        </div>
        <br>
        <div class="input-group row"
          <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
            <div class="col-sm-10">
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

<?php echo $__env->make('auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\nev-project-ver-6.x\resources\views/categories/form.blade.php ENDPATH**/ ?>