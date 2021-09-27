
<?php $__env->startSection('BaseStyles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('BaseScripts'); ?>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('body'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Halaman home</h1>
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', ['title' => 'Halaman app'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apllications\cobalaravel7\resources\views/layouts/app.blade.php ENDPATH**/ ?>