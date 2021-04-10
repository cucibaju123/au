@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible" role="alert">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
        <div class="alert alert-success alert-dismissible" style="padding-left: 350px;" role="alert">
            {{session('success')}}
        </div>
@endif

@if(session('error'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            {{session('error')}}
        </div>
@endif
