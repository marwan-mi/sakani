@extends('layouts\app')


@section('content')
<h2 style="color:rgb(216, 216, 216);margin-left:-25px">Categories :</h2><br>

    <div class="panel-default">
        <div class="panel-body">
        <table class="table table-hover">
        <thead>
            <th>name</th>
            <th>editing</th>
            <th>deleting</th>
        </thead>
        <tbody>
            @if($categories->count()>0)
            @foreach($categories as $category)
                <tr>
                    <td>
                        {{$category->name}}
                    </td>
                    <td>
                        <a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-xs btn-info">edit</a>
                    </td>
                    <td>
                        <a href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-xs btn-danger">delete</a>
                    </td>
                </tr>
            @endforeach
            @else
                <tr>
                    <td colspan="4">
                        <h2 class="text-center">No categories</h2>
                    </td>
                </tr>
                
            @endif
        </tbody>
        </table>
        </div>
    </div>

    

@stop 
@section('script')
<script>
    $(".l6").css("background-color", "#52B586");
</script>
@stop