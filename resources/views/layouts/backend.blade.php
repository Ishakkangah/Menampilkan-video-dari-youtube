@extends('layouts.base', ['title' => 'Halaman backend'])
@section('BaseStyles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('BaseScripts')
    <script src="{{ asset('js/app.js') }}"></script>
    @include('sweetalert::alert')
    
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
@endsection

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-3">Halaman Admin | Backend</h1>
                @yield('content')
            </div>
        </div>
    </div>
@endsection