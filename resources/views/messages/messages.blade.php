
@if (Session::has('error'))
<div class="alert alert-danger" role="alert">
    @foreach (Session::get('error')->all() as $error)
        {{$error}}
    @endforeach
</div>
@endif

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{Session::get('success')}}
 </div>
@endif
