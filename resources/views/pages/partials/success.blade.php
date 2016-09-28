@if (Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="btn-floating btn-flat tooltipped" data-position="bottom" data-tooltip="Close" data-dismiss="alert"><i class="material-icons">&#xE5CD;</i></button>

        {{ Session::get('success') }}
    </div>
@endif