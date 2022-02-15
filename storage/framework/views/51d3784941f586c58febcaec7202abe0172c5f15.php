<div class="col-sm-6 col-md-3">
   <div class="thumbnail">
     <div class="caption">
        <img src="<?php echo e(Storage::url($product->image)); ?>" heigh="240px">
        <h3><p><?php echo e($product->name); ?> </p></h3>
        <p><?php echo e($product->price); ?> руб.</p>
        <p><?php echo e($product->id); ?></p>
        <p><?php echo e($product->name); ?></p>
        <p><?php echo e($product->price); ?> руб.</p>
        <p><?php echo e($product->user_id); ?> user_id</p>
        <p>
        <a href="<?php echo e(route ('messagepodrobno',  $product->id)); ?>"
        class="btn btn-default" role="button">Подробнее</a>
      </p>
    </div>
  </div>
</div>
<?php /**PATH C:\OSPanel\domains\nev-project-ver-6.x\resources\views/card.blade.php ENDPATH**/ ?>