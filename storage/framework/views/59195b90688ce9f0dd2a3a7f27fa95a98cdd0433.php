<?php $__env->startSection('title-block'); ?>
  Добавить объявление
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="col-md-12">
  <br>
<h1>Добавить объявление</h1>
  <br>
<form method="POST" enctype="multipart/form-data"
  action="<?php echo e(route('products.store')); ?>">
    <div>
<?php if(isset($product)): ?>
  @nethod('PUT')
<?php endif; ?>
<?php echo csrf_field(); ?>
            <div class="input-group row">
            <label for="code" class="col-sm-2 col-form-label">Код:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="code" id="code"
                volue="<?php if(isset($product)): ?><?php echo e($product->code); ?><?php endif; ?>">
              </div>
          </div>
            <br>
          <div class="input-group row">
            <label for="name" class="col-sm-2 col-form-label">Наз: </label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="name" id="name"
                value="<?php if(isset($probuct)): ?><?php echo e($product->name); ?><?php endif; ?>">
              </div>
          </div>
            <br>
          <div class="input-group row">
            <label for="category_id" class="col-cm-2 col-form-label">Категория:</label>
              <div class="col-cm-6">
                <select name="category_id" id="category_id" class="form-Control">
                  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($category->id); ?>"
                    <?php if(isset($product)): ?>
                      <?php if($product->category_id == $category->id): ?> selected <?php endif; ?>
                    <?php endif; ?>>
                      <?php echo e($category->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
            </div>
              <br>
            <div class="input-group row">
              <label for="description" class="col=cm-2 col-form-label">Описание:</label>
                <div class="col-cm-6">
                  <textarea name="description" id="description" cols="72" rows="7">
                    <?php if(isset($product)): ?><?php echo e($product->description); ?><?php endif; ?>
                  </textarea>
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
              <br>
            <button class="btn btn-success">Сохранить</button>
          </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\nev-project-ver-6.x\resources\views/products/form.blade.php ENDPATH**/ ?>