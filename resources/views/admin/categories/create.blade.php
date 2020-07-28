@extends('layouts\app')


@section('content')


<h2 style="color:rgb(216, 216, 216);margin-left:-25px">Create Category :</h2><br>

        <div class="panel panel-default">
            
            <div class="panel-body">
                <form action="{{route('category.store')}}" method="post" >
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="name" class="text-muted">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-group btn-success">store category</button>
                    </div>

                </form>
            </div>
        </div>

@stop
@section('script')
<script>
    $(".l5").css("background-color", "#52B586");
</script>
@stop