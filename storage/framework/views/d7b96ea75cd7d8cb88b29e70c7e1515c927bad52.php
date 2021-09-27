<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
    <a class="navbar-brand text-warning fw-bold <?php echo e(request()->is('/') ? 'active' : ''); ?>" href="/">Parsinta</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-link text-warning fw-bold <?php echo e(request()->is('/') ? 'active' : ''); ?>"  href="/">Home</a>
        <a class="nav-link text-warning fw-bold <?php echo e(request()->is('url_youtube/table') ? 'active' : ''); ?>" href="<?php echo e(route('youtube.table')); ?>">Series</a>
        <a class="nav-link text-warning fw-bold" href="#">Topics</a>
        <a class="nav-link text-warning fw-bold"href="#">Paths</a>
        <a class="nav-link text-warning fw-bold"href="#">Premiums</a>
        </div>
    </div>
    </div>
</nav><?php /**PATH D:\Apllications\cobalaravel7\resources\views/components/navbar.blade.php ENDPATH**/ ?>