
<?php $__env->startSection('BaseStyles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('BaseScripts'); ?>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <script async src="//jsfiddle.net/alemens/f19kct0v/embed/"></script>
    <script>
    function autoPlayYouTubeModal() {
    var triggerOpen = $("body").find('[data-tagVideo]');
    triggerOpen.click(function() {
        var theModal = $(this).data("bs-target"),
        videoSRC = $(this).attr("data-tagVideo"),
        videoSRCauto = videoSRC + "?autoplay=0";
        $(theModal + ' iframe').attr('src', videoSRCauto);
        $(theModal + ' button.btn-close').click(function() {
        $(theModal + ' iframe').attr('src', videoSRC);
        });
    });
    }
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-3">Halaman Admin | Backend</h1>
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', ['title' => 'Halaman backend'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apllications\cobalaravel7\resources\views/layouts/backend.blade.php ENDPATH**/ ?>