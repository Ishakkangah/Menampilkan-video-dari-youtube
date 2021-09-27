@extends('layouts.backend', ['title' => 'Create | Belajar input video youtube'])

@section('content')

<div class="row">
    <form action="{{ route('youtube.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <input type="file" name="thumbnail" class="form-control-file">
            @error('thumbnail')
            <div id="emailHelp" class="form-text">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Title</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="emailHelp">
            @error('name')
            <div id="emailHelp" class="form-text">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tag_video" class="form-label">Url video</label>
            <input type="text" name="tag_video" class="form-control @error('tag_video') @enderror" id="tag_video" aria-describedby="emailHelp">
            @error('tag_video')
                <div id="emailHelp" class="form-text">{{ $message }}</div>
            @enderror
          </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary fw-bold text-white">Save</button>
        </div>
    </form>
</div>


@endsection