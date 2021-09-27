

<?php $__env->startSection('content'); ?>


<a href="<?php echo e(route('youtube.create')); ?>" class="btn btn-primary fs-6">New content youtube</a>
<div class="row mt-2 ">

 <?php $__currentLoopData = $url_youtubes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $youtube): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!-- Trigger -->
<div class="row">
    <div class="card-body">
        <button data-bs-toggle="modal" class="border-0 bg-black text-white" data-tagVideo="<?php echo e($youtube->tag_video); ?>" data-bs-target="#videoModal"><?php echo e($youtube->name); ?></button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="videoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="ratio ratio-16x9">
          <iframe src="<?php echo e($youtube->iframe_video); ?>" allow="autoplay;" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Call the function on document ready -->
<script>
  $(document).ready(function() {
    autoPlayYouTubeModal();
  });
</script>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="my-2">
        <?php echo e($url_youtubes->links()); ?>

    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', ['title' => 'Table | Belajar input video youtube'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apllications\cobalaravel7\resources\views/Youtube/table.blade.php ENDPATH**/ ?>