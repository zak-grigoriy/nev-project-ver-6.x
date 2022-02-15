<?php $__env->startSection('title', 'Авторизация'); ?>

<?php $__env->startSection('content'); ?>

  <br>
  <br>
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">Авторизация</div>
        <div class="card-body">
          <form method="POST" action="<?php echo e(route('login')); ?>" aria-label="login">
          <?php echo csrf_field(); ?>
            <div class="form-group row">
              <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail</label>
                <div class="col-md-6">
                  <input id="email" type="email" class="form-control"
                  name="email" value="" required autofocus>
                  <br>
                </div>
           </div>
           <div class="form-group row">
             <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>
                <div class="col-md-6">
                 <input id="password" type="password" class="form-control"
                 name="password" required
                </div>
              <br>
           </div>
           <div class="form-group row md-0">
             <div class="col-md-8 offset-md-4">
               <button type="submit" class="btn btn-primary">
               Войти
               </buton>
             </div>
           </div>
        </form>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\nev-project-ver-6.x\resources\views/auth/login.blade.php ENDPATH**/ ?>