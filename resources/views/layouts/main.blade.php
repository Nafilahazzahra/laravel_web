<!Doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>APP LARAVEL TKB</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    main>.container {
        padding: 60px 15px 0;
    }
</style>

</head>
<body class="d-flex flex-column h-100">
 
    {{-- Megambil header dari file header --}}
    @include('layouts.header')
    


    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">

            {{-- ambil dari file home --}}
           @yield('content')
        </div>
    </main>


    {{-- Ambil Footer dari file Footer --}}
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>