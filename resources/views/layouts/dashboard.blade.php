<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard - @yield('title') - Baptiste DROUET</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    </head>
    <body class="bg-white text-black dark:bg-neutral-900 dark:text-white flex flex-col sm:flex-row min-h-screen">

        <div class="w-full sm:w-1/5 bg-blue-600 dark:bg-blue-800 text-white overflow-auto">
            @include('partials.dashboardNavbar')
        </div>

        <div class="w-full flex-grow p-4 sm:w-4/5 sm:p-10">
            @if(session('alert-success')) 
                <div class="alert-success-full text-center">{{ session('alert-success') }}</div>
            @elseif(session('alert-danger'))
                <div class="alert-danger-full text-center">{{ session('alert-danger') }}</div>
            @endif

            @yield('content')
        </div>

        <script src="https://kit.fontawesome.com/3f3a7680b7.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.tiny.cloud/1/fa4d8v7kydroqbnjq12o9w809ff4v2q3lt0u3qgbp18sl5dq/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>  
        <script src="{{ mix('js/app.js') }}"></script>
        @yield('scripts')
    </body>
</html>