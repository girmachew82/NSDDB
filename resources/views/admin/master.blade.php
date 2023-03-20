<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Debre Birhan university">
    <meta name="keywords" content="DBU, Debre, Birhan">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <title>DBU</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    {{ View::make('admin.top') }}
    {{ View::make('admin.aside') }}
        @yield('content')
    {{ View::make('admin.footer') }}

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>
</html>
