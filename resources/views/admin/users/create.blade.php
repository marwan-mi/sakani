@extends('layouts\app')


@section('content')

@if(count($errors)>0)
        @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endforeach
    @endif
    <h2 style="color:rgb(216, 216, 216);margin-left:-25px"> Create new user :</h2><br>

        <div class="panel panel-default">
            
            <div class="panel-body">
                <form action="{{route('user.store')}}" method="post" >
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="name" class="text-muted">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name" class="text-muted">email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-group btn-success">Add user</button>
                    </div>

                </form>
            </div>
        </div>

@stop
@section('script')
<script>
    $(".l2").css("background-color", "#52B586");
</script>
@stop