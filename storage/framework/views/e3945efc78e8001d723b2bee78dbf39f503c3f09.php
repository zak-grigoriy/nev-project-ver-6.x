<div class="col-sm-6 col-md-3">
  <div class="thumbnail">
    <img src="#" alt="">
      <div class="caption">
      <img src="<?php echo e(Storage::url($product->image)); ?>" heigh="240px">
      <h3><p><?php echo e($product->name); ?> </p></h3>
        <p><?php echo e($product->price); ?> руб.</p>
        <!-- <p><?php echo e($product->user_id); ?> user_id</p> -->
        <p><?php echo e($product->id); ?> id</p>
        <p>
           <a href="<?php echo e(route('contact-data', $product->id)); ?>" class="btn btn-default"
           role="button">Комментарии</a>
        </p>
      </div>
    </div>
</div>
<?php /**PATH C:\OSPanel\domains\nev-project-ver-6.x\resources\views/auth/card.blade.php ENDPATH**/ ?>