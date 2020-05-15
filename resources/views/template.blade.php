@php
$config = [
    'appName' => config('app.name'),
    'locale' => $locale = app()->getLocale(),
    'locales' => config('app.locales'),
    'githubAuth' => config('services.github.client_id'),
];
@endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
        <link rel="stylesheet" href="{{ mix('dist/css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/all.css') }}">
    </head>
    <body>
        <div id="app"></div>

        {{-- Global configuration object --}}
        <script>
            window.config = @json($config);
        </script>
        <script src="{{ mix('dist/js/app.js') }}"></script>
        <script src="{{asset('assets/js/swiper.min.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
