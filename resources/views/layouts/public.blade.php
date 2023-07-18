<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') - Baptiste DROUET</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="bg-white text-black dark:bg-neutral-900 dark:text-white flex flex-col min-h-screen">
        @include('partials.navbar')

        @if(session('alert-success')) 
            <div class="alert-success">{{ session('alert-success') }}</div>
        @elseif(session('alert-danger'))
            <div class="alert-danger">{{ session('alert-danger') }}</div>
        @endif

        @yield('content')

        @include('partials.footer')
        <script src="https://kit.fontawesome.com/3f3a7680b7.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="{{ mix('js/app.js') }}"></script>
        @yield('scripts')
    </body>
</html>