<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.7.0.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- <link href="vendor/select2/dist/css/select2.min.css" rel="stylesheet" />
    <script src="vendor/select2/dist/js/select2.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    {{-- <link href="https://cdn.datatables.net/1.11.7/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.11.7/js/jquery.dataTables.min.js"></script> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    @stack('scripts')
</body>

</html>
