<div>
    @if (Session::has('success_message'))
            <div class="alert alert-success" style="background: lightgreen; color: darkgreen">
                {{ Session::get('success_message') }}
            </div>

    @elseif (Session::has('success_deleting'))
                <div class="alert alert-success" style="background: pink; color: red">
                {{ Session::get('success_deleting') }}
            </div>
    @endif

</div>

