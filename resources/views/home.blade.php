@extends('layouts.app')

@section('content')
@if($admin == 0)
<h2 style="color:rgb(216, 216, 216);margin-left:-25px">Locals for sale:</h2><br>

     <div class="col-lg-3 " >
        <div class="panel panel-info" style="width:95%">
            <div class="panel-heading">
            Villa
            </div>
            <div class="panel-body text-center">
                <h1>{{$vs}}</h1>
            </div>
        </div>
         
     </div>
     <div class="col-lg-3 " >
        <div class="panel panel-success" style="width:95%">
            <div class="panel-heading">
            Apartement
            </div>
            <div class="panel-body text-center">
                <h1>{{$ps}}</h1>
            </div>
        </div>
         
     </div><div class="col-lg-3 " >
        <div class="panel panel-danger" style="width:95%">
            <div class="panel-heading">
            Studio
            </div>
            <div class="panel-body text-center">
                <h1>{{$ss}}</h1>
            </div>
        </div>
         
     </div><div class="col-lg-3 " >
        <div class="panel panel-primary" style="width:95%">
            <div class="panel-heading">
            Arab house
            </div>
            <div class="panel-body text-center">
                <h1>{{$as}}</h1>
            </div>
        </div>
         
     </div> 
     
     <h2 style="color:rgb(216, 216, 216);margin-left:-25px;margin-top:20px;">Locals for renting:</h2><br>

     <div class="col-lg-3 " >
        <div class="panel panel-info" style="width:95%">
            <div class="panel-heading">
            Villa
            </div>
            <div class="panel-body text-center">
                <h1>{{$vr}}</h1>
            </div>
        </div>
         
     </div>
     <div class="col-lg-3 " >
        <div class="panel panel-success" style="width:95%">
            <div class="panel-heading">
            Apartement
            </div>
            <div class="panel-body text-center">
                <h1>{{$pr}}</h1>
            </div>
        </div>
     </div><div class="col-lg-3 " >
        <div class="panel panel-danger" style="width:95%">
            <div class="panel-heading">
            Studio
            </div>
            <div class="panel-body text-center">
                <h1>{{$sr}}</h1>
            </div>
        </div>
         
     </div><div class="col-lg-3 " >
        <div class="panel panel-primary" style="width:95%">
            <div class="panel-heading">
            Arab house
            </div>
            <div class="panel-body text-center">
                <h1>{{$ar}}</h1>
            </div>
        </div>
         
     </div> 
    
     
     <h2 style="color:rgb(216, 216, 216);margin-left:-25px;margin-top:20px;">Offers sold out :</h2><br>

     <table class="table table-hover">
        <thead>
            <th> </th>
            <th>Villa</th>
            <th>Apartement</th>
            <th>Studio</th>
            <th>Arab house</th>
        </thead>
        <tbody>
                <tr>
                    <td style="font-weight: bold">
                        Saled
                    </td>
                    <td>
                      0  
                    </td>
                    <td style="vertical-align: middle;">
                       0 
                    </td>
                    <td style="vertical-align: middle;">
                        0
                    </td>
                    <td style="vertical-align: middle;">
                        0
                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold">
                        Rented
                    </td>
                    <td>
                        0
                    </td>
                    <td style="vertical-align: middle;">
                        0
                    </td>
                    <td style="vertical-align: middle;">
                        0
                    </td>
                    <td style="vertical-align: middle;">
                        0
                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold">
                        Both
                    </td>
                    <td>
                        0
                    </td>
                    <td style="vertical-align: middle;">
                        0
                    </td>
                    <td style="vertical-align: middle;">
                        0
                    </td>
                    <td style="vertical-align: middle;">
                        0
                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold;vertical-align: middle;">
                        All
                    </td>
                    <td colspan="4" class="text-center">
                        <h2>0</h2>
                    </td>
                </tr>
        </tbody>
        </table>
    @else
<h2 style="color:rgb(216, 216, 216);margin-left:-25px">Dashboard :</h2><br>

    @endif 
@stop
@section('script')
<script>
    $(".l1").css("background-color", "#52B586");
</script>
@stop