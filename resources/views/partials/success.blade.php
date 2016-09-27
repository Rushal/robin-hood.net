@if (Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="btn-floating btn-flat" data-dismiss="alert"><i class="material-icons">&#xE5CD;</i></button>

        <span><i class="material-icons">&#xE5CA;</i> {{ Session::get('success') }}</span>
    </div>

    <script>
        Materialize.toast('{{ Session::get('success') }}', 4000);
    </script>
@endif