@extends('layouts\app')


@section('content')

    <div class="panel-default">
        <div class="panel-body">
        <table class="table table-hover">
        <thead>
            <th>image</th>
            <th>title</th>
            <th>editing</th>
            <th>deleting</th>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>
                        <img src="{{$post->featured}}" alt="mkch" width="90px" height="50px">
                        
                    </td>
                    <td>
                        {{$post->title}}
                    </td>
                    <td>
                        <a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-xs btn-info">edit</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-xs btn-danger">delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
        </div>
    </div>

    

@stop 