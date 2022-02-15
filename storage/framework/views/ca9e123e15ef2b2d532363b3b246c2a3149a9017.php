<?php $__env->startSection('title-block'); ?>
  Мои объявления
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <div class="col-md-12">
    <h1>Мои объявления</h1>
    <table class="table">
      <tbody>
        <tr>
          <th> № </th>
          <th> Код </th>
          <th> Название </th>
          <th> Действия </th>
        </tr>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
            $user_id = Auth::id();
          ?>
            <?php if($product->user_id === $user_id ): ?>
              <tr>
              <td> <?php echo e($product->id); ?> </td>
              <td> <?php echo e($product->code); ?> </td>
              <td> <?php echo e($product->name); ?> </td>
              <td>
                <div class="btn-group" role="group">
                  <form action="<?php echo e(route ('products.destroy', $product)); ?>" method="POST">
                    <a class="btn btn-success" type="button"
                    href="<?php echo e(route('products.show', $product)); ?>">Открыть</a>
                    <a class="btn btn-warning" type="button"
                    href="<?php echo e(route('products.edit', $product)); ?>">Редактиовать</a>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                      <input class="btn btn-danger" type="submit" value="Удалить">
                  </form>
                </div>
              </td>
              </tr>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
      </table>
     <a class="btn btn-success" type="button" href="<?php echo e(route('products.create')); ?>">Добавить объявление</a>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\nev-project-ver-6.x\resources\views/products/index.blade.php ENDPATH**/ ?>