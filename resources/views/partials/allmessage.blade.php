@if (\Illuminate\Support\Facades\Session::get('msg') != null)
    {{--  https://getbootstrap.com/docs/4.6/components/alerts/#dismissing--}}
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{\Illuminate\Support\Facades\Session::get('msg')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
