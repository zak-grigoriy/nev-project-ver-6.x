<?php $__env->startSection('title-block'); ?>
  Подробная информация
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <h1>Подробная информация</h1>
    <div class="col=md-12">
      <table class="table">
        <tbody>
          <tr>
            <th> Поле </th>
            <th> Значение </th>
          </tr>
            <tr>
              <td> ID </td>
              <td> <?php echo e($product->id); ?> </td>
            </tr>
            <tr>
              <td> Категория id </td>
              <td> <?php echo e($product->category_id); ?> </td>
            </tr>
            <tr>
              <td> Код </td>
              <td> <?php echo e($product->code); ?> </td>
            </tr>
            <tr>
              <td> Название </td>
              <td> <?php echo e($product->name); ?> </td>
            </tr>
            <tr>
              <td> Описание </td>
              <td> <?php echo e($product->description); ?> </td>
            </tr>
            <tr>
              <td> Юзер id </td>
              <td> <?php echo e($product->user_id); ?> </td>
            </tr>
            <tr>
              <td> Проайс </td>
              <td> <?php echo e($product->price); ?> </td>
            </tr>
            <tr>
              <td> Картинка </td>
              <td><img src="<?php echo e(Storage::url($product->image)); ?>"
              heigh="240px"></td>
           </tr>
        </tbody>
      </table>

    <a href="<?php echo e(route('add-form', $product->id)); ?>"><button
    class="btn btn-warning">Добавить комментарий</button></a>
    <br>
    <br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\nev-project-ver-6.x\resources\views/messagepodrobno.blade.php ENDPATH**/ ?>