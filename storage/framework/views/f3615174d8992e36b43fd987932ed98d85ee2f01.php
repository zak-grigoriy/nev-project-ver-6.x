<div class="col-sm-6 col-md-3">
  <div class="thumbnail">
    <div class="caption">
      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($product->id == $item): ?>
      <img src="<?php echo e(Storage::url($product->image)); ?>" heigh="240px">
      <h3><p><?php echo e($product->name); ?></p></h3>
      <p><?php echo e($product->price); ?> руб.</p>
      <p><?php echo e($product->id); ?> </p>
      <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <a href="/messagepodrobno/<?php echo e($item); ?>"><button type="button"
      class="btn btn-outline-secondary">Подробнее</button></a>
    </div>
  </div>
</div>
<?php /**PATH C:\OSPanel\domains\nev-project-ver-6.x\resources\views/card_pagin.blade.php ENDPATH**/ ?>