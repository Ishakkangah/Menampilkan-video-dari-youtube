<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    {{-- BaseStyles --}}
    @yield('BaseStyles')

    <title>{{ $title ?? 'Latihan membuat input file' }}</title>
</head>
<body>
    <x-navbar></x-navbar>
    <div class="mt-4">
        @yield('body')
    </div>
    
    {{-- BaseScript --}}
    @yield('BaseScripts')
</body>
</html>