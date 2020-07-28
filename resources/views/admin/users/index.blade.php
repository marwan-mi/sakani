@extends('layouts\app')


@section('content')
<h2 style="color:rgb(216, 216, 216);margin-left:-25px">Users :</h2><br>
    <div class="panel-default">
    
        <div class="panel-body">
        <table class="table table-hover">
        <thead>
            <th>image</th>
            <th>name</th>
            
            <th>delete</th>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr >
                    <td>
                        <img src="" alt="mkch" width="50px" height="50px" style="border-radius:50%;">
                        
                    </td>
                    <td style="vertical-align: middle;">
                        {{$user->name}}
                    </td>
                    <td style="vertical-align: middle;">
                    <a class="btn btn-xs btn-danger" href="{{route('user.delete',['id'=>$user->id])}}">delete</a>
                       
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
        </div>
    </div>

    

@stop 
@section('script')
<script>
    $(".l3").css("background-color", "#52B586");
</script>
@stop