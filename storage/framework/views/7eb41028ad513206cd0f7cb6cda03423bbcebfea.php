<?php $__env->startSection('title-block'); ?>
    Все сообщения
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col=md-12">
    <h1><?php echo e($category->id); ?></h1>
    <table class="table">
        <tbody>
        <tr>
            <th> Поле </th>
            <th> Значение </th>
        </tr>
        <tr>
            <td> ID </td>
            <td> <?php echo e($category->id); ?> </td>
        </tr>
        <tr>
            <td> Код </td>
            <td> <?php echo e($category->code); ?> </td>
        </tr>
        <tr>
            <td> Название </td>
            <td> <?php echo e($category->name); ?> </td>
        </tr>
        <tr>
            <td> Описание </td>
            <td> <?php echo e($category->description); ?> </td>
        </tr>
        <tr>
            <td> Картинка </td>
            <td><img src="<?php echo e(Storage::url($category->image)); ?>"
                     heigh="240px"></td>
        </tr>
        <!-- <tr>
            <td>Кол-во объвлений </td>
            <td> <?php echo e($category->count()); ?></td>

        </tr> -->
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\nev-project-ver-6.x\resources\views/categories/show.blade.php ENDPATH**/ ?>