<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{ asset('js/materialize-0.97.7.js') }}"></script>
<script src="{{ asset('js/js.cookie.js') }}"></script>
<script src="{{ asset('js/chardinjs.min.js') }}"></script>
<script src="{{ asset('js/doc-ready.js') }}"></script>

<script src="{{ asset('js/remodal.js') }}"></script>

@if(\Agent::isMobile() && \Request::is('/'))
    <script>
        $(document).ready(function() {
            window.scrollTo(0, 1);
        });
    </script>
@endif
