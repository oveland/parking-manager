<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name_url', 'PRM') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>

        @if( app()->environment('production') )
            <script>
                if ('serviceWorker' in navigator) {
                    caches.keys().then(function(cacheNames) {
                        cacheNames.forEach(function(cacheName) {
                            caches.delete(cacheName);
                        });
                    });
                }
            </script>
            @laravelPWA
        @endif
    </head>
    <body class="font-sans antialiased bg-gray-100">
        @inertia

        @env ('local')
{{--            <script src="http://localhost:4000/browser-sync/browser-sync-client.js"></script>--}}
        @endenv
    </body>
</html>
