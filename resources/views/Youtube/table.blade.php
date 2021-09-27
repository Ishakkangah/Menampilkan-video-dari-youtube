@extends('layouts.backend', ['title' => 'Table | Belajar input video youtube'])

@section('content')


<a href="{{ route('youtube.create') }}" class="btn btn-primary fs-6">New content youtube</a>
<div class="row mt-2 ">

 @foreach ($url_youtubes as $youtube)
<!-- Trigger -->
<div class="row">
    <div class="card-body">
        <button data-bs-toggle="modal" class="border-0 bg-black text-white" data-tagVideo="{{ $youtube->tag_video }}" data-bs-target="#videoModal">{{ $youtube->name }}</button>
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
          <iframe src="{{ $youtube->iframe_video }}" allow="autoplay;" allowfullscreen></iframe>
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

    @endforeach
    <div class="my-2">
        {{ $url_youtubes->links() }}
    </div>
</div>



@endsection
