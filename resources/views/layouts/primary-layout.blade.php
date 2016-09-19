<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    @include('partials.styles-partial')

    @yield('header-styles')
    @yield('header-scripts')
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>
    @include('partials.nav-partial')
    @include('partials.login-modal-partial')

    @yield('content')

    @include('partials.scripts-partial')
    @yield('footer-scripts')
</body>
</html>