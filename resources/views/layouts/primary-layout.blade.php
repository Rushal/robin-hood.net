<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/robin-hood.css') }}">

    <!-- Scripts -->
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

<!-- Scripts -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{ asset('js/materialize-0.97.7.js') }}"></script>
<script>
    $(".button-collapse").sideNav({
        menuWidth: 250,
        edge: 'right',
        closeOnClick: true
    });

    $(document).ready(function() {
        $('.modal-trigger').leanModal({
            ready: function () {
                $('ul.tabs').tabs();
            }
        });

        var planks = 0;
        $(".plank").hover( function () {
            if($(this).css('opacity') == 0) {
                $(this).fadeTo("slow", 1.0);
                planks++;
                if(planks >= 21){
                    $(".treasure").fadeTo("slow", 1.0);
                }
            }
        });
    });
</script>

</body>
</html>