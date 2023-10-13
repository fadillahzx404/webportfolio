<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >

        <title>{{ config("app.name", "DevDes.id") }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"
        />



        <link
            href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"
            rel="stylesheet"
        />
        <!--Responsive Extension Datatables CSS-->
        <link
            href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css"
            rel="stylesheet"
        />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js',
        'resources/js/toast.js','resources/js/toast-error.js'])

        <style>
            .dataTables_wrapper .dataTables_filter,
            .dataTables_length {
                display: none;
            }
            table.dataTable.hover tbody tr:hover,
            table.dataTable.display tbody tr:hover {
                background-color: #ebf4ff;
                /*bg-indigo-100*/
            }
            table.dataTable.display tbody tr.odd > .sorting_1,
            table.dataTable.order-column.stripe tbody tr.odd > .sorting_1 {
                background-color: #ffff;
            }
            table.dataTable.display tbody tr.even > .sorting_1,
            table.dataTable.order-column.stripe tbody tr.even > .sorting_1 {
                background-color: #ffff;
            }

            table.dataTable.no-footer {
                border-bottom: 1px solid #e2e8f0;
                /*border-b-1 border-gray-300*/
                margin-top: 0.75em;
                margin-bottom: 0.75em;
            }
            table.dataTable thead th,
            table.dataTable thead td {
                border-bottom: 1px solid #e2e8f0;
                /*border-b-1 border-gray-300*/
                margin-top: 0.75em;
                margin-bottom: 0.75em;
            }
            .dataTables_wrapper {
                .row:nth-child(1),
                .row:nth-child(2) {
                    display: none;
                }
            }
        </style>
    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="mx-5 py-6 px-10 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('prepend-script') @include('includes.script')
        @stack('addon-script')
    </body>
</html>
