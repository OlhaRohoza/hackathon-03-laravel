<div>
    @if (Session::has('success_message'))
            <div class="alert alert-success" style="background: lightgreen; color: darkgreen">
                {{ Session::get('success_message') }}
            </div>
    @endif

</div>

