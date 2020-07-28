@extends('layouts.app')


@section('content')

<h2 style="color:rgb(216, 216, 216);margin-left:-25px">Editing Category : {{$category->name}}</h2><br>

    <div class="panel panel-default">
        
        <div class="panel-body">
            <form action="{{route('category.update',['id'=>$category->id])}}" method="post" >
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" name="name" value="{{$category->name}}" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">update</button>
                    </div>
                </div>
               
            </form>
        </div>
    </div>

@stop
@section('script')
<script>
    $(".l6").css("background-color", "#52B586");
</script>
@stop