

<?php $__env->startSection('content'); ?>


<button data-bs-toggle="modal" data-tagVideo="https://www.youtube.com/embed/slvfMym2tY4" data-bs-target="#videoModal">Video</button>



<!-- Modal -->
<div class="modal fade" id="videoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="ratio ratio-16x9">
          <iframe src="https://www.youtube.com/embed/slvfMym2tY4" allow="autoplay;" allowfullscreen></iframe>
          
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Call the function on document ready -->
<script>
  // Get and autoplay Video from data
function autoPlayYouTubeModal() {
  var triggerOpen = $("body").find('[data-tagVideo]');
  triggerOpen.click(function() {
    var theModal = $(this).data("bs-target"),
      videoSRC = $(this).attr("data-tagVideo"),
      videoSRCauto = videoSRC + "?autoplay=1";
    $(theModal + ' iframe').attr('src', videoSRCauto);
    $(theModal + ' button.btn-close').click(function() {
      $(theModal + ' iframe').attr('src', videoSRC);
    });
  });
}
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apllications\cobalaravel7\resources\views/Home/index.blade.php ENDPATH**/ ?>