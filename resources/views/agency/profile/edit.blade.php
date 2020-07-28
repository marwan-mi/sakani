@extends('layouts\app')

@section('content')
    @include('includes.error')
    <h2 style="color:rgb(216, 216, 216);margin-left:-25px">Edite Profile :</h2><br><br>
    <div class="panel panel-default">
            <div class="panel-body">
                <form action="{{route('agency.profile.update')}}" method="post" enctype="multipart/form-data" >
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="name" class="text-muted">Avatar</label>
                        <input type="file" name="avatar" class="form-control" value="">
                    </div>

                    <div class="form-group">
                        <label for="name" class="text-muted">Name</label>
                        <input type="text" name="name" class="form-control"  value="{{$user->name}}">
                    </div>

                    <div class="form-group">
                        <label for="name" class="text-muted">email</label>
                        <input type="email" name="email" class="form-control" value="{{$user->email}}">
                    </div>

                    <div class="form-group">
                        <label for="name" class="text-muted">Adress</label>
                        <input type="text" name="adress" class="form-control" value="{{$user->profile->adress}}">
                    </div>

                    <div class="form-group">
                        <label for="Phone-number-1" class="control-label">Phone Number 1</label>
                            <input id="Phone-number-1" type="number" class="form-control" name="phone1" value="{{$user->profile->phone1}}" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="Phone-number-2" class=" control-label">Phone Number 2 <span style="color:silver"></span></label>
                            <input id="Phone-number-2" type="number" class="form-control" name="phone2" value="{{$user->profile->phone2}}"  autofocus>
                    </div>

                    <div class="form-group">
                        <label for="fb" class="control-label">Facebook Page <span style="color:silver"></label>
                            <input id="fb" type="text" class="form-control" name="fb" value="{{$user->profile->fb}}"  autofocus>
                    </div>
                    <div class="form-group">
                        <label for="local-picture" class="text-muted">Local picture</label>
                        <input type="file" name="local_picture" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="name" class="text-muted">new password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="form-group text-center">
                        <button class="btn btn-group btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>

@stop 
@section('script')
<script>
    $(".l4").css("background-color", "#52B586");
</script>
@stop