<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Интернет Магазин:<?php echo $__env->yieldContent('title'); ?> </title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand"  href="<?php echo e(route('index')); ?>">Интернет обявленя</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a  href="<?php echo e(route('index')); ?>">Все объявления</a></li>
          <li><a  href="<?php echo e(route('categories')); ?>">Категории объявлений</a></li>
        </ul>
      <?php if(auth()->guard()->guest()): ?>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('login')); ?>">Панель администратора</a></li>
      <?php endif; ?>

      <?php if(auth()->guard()->check()): ?>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item drodown">
           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="<?php echo e(route('home')); ?>">Панель администратора</a></li>
          <li class="nav-item drodown">
           <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick=".preventDefault();
            document.detElementById('logout-form').submit();">Выйти</a>
        </ul>
      <?php endif; ?>
        </div>
      </div>
    </nav>
    <div class="container">
    <?php echo $__env->yieldContent('content'); ?>
    </div>
  </body>
</html>
<?php /**PATH C:\OSPanel\domains\nev-project-ver-6.x\resources\views/layouts/master.blade.php ENDPATH**/ ?>