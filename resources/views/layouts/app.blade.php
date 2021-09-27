@extends('layouts.base', ['title' => 'Halaman app'])
@section('BaseStyles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('BaseScripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection


@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Halaman home</h1>
                @yield('content')
            </div>
        </div>
    </div>
@endsection