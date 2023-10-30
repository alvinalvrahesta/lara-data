<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- <script src="{{ asset('js/moment.min.js') }}"></script> --}}


    <link href="{{ asset('DataTables/datatables.min.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <livewire:layout.navigation />

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
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
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>

    <script>
        let table = new DataTable('#myTable', {

            serverSide: true,
            processing: true,
            ajax: 'user/json',
            scrollX: true,
            scrollCollapse: true,
            buttons: true,
            searching: true,
            columns: [{
                    data: 'id'
                },
                {
                    data: 'name'
                },
                {
                    data: 'email'
                },
                {
                    data: 'email_verified_at'
                },
                {
                    data: 'created_at'
                },
                {
                    data: 'updated_at'
                },
            ],
            columnDefs: [{
                targets: [3, 4, 5], // Replace with the column index where you want to format the date
                render: function(data, type, row) {
                    return type === 'display' || type === 'filter' ? moment(data).format(
                        'd/m/y HH:mm:ss') : data;
                }
            }]

        });

        // document.querySelector('#button').addEventListener('click', function() {
        //     alert(table.rows('.selected').data().length + ' row(s) selected');
        // });
    </script>
</body>

</html>
