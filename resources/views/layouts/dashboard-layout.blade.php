<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}: Dashboard Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('dashboard.partials.styles-partial')

    @yield('header-styles')
    @yield('header-scripts')
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>
@include('dashboard.partials.nav-partial')

<main>
    <div class="container">
        @yield('content')
    </div>
</main>

@include('dashboard.partials.scripts-partial')
@yield('footer-scripts')

</body>
</html>