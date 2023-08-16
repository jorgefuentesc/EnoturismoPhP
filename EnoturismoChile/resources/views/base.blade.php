<!-- resources/views/base.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/votacion/index.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;900&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    @yield('modal')

    <div>
        @yield('contenido')
    </div>

    
    <script src="{{ asset('js/votacion/modal.js') }}"></script>
    <script src="{{ asset('js/libs/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/votacion/index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <!-- Otros scripts -->
    @yield('script')
</body>
</html>
