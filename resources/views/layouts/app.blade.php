<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="./css/app.css">
        <!-- Scripts -->
{{--        @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    </head>
    <body class="sidebar-mini layout-fixed" style="height: auto">
        <div class="wrapper">
            @include('layouts.navigation')
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                @include('layouts.main-nav')
            </aside>
            <!-- Page Content -->
            <main class="content-wrapper">
                <!-- Page Heading -->
                <section class="content-header">
                    <div class="container-fluid">
                        {{ $header }}
                    </div>
                </section>
                <section class="content">
                    <div class="container-fluid">
                        {{ $slot }}
                    </div>
                </section>
            </main>
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                </div>
                <strong>{{ date('d.m.Y') }} <a href="https://toyrik.github.io">Toy Rik</a>.</strong>
            </footer>
        </div>
        <script src="./js/app.js"></script>
    </body>
</html>
