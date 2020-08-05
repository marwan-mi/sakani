@extends('layouts\app')

@section('style')
<link href="{{ asset('css/card.css') }}" rel="stylesheet">

@stop
@section('content')
<h2 style="color:rgb(216, 216, 216);margin-left:-25px">All locals :</h2><br><br>
@if($locals->count()>0)
@foreach($locals as $local)
<div class="" >
            <div class="card-exp mx-auto" style="margin:0px auto 35px auto;">
              <nav>
                <i class="fas fa-user-circle fa-lg"> &nbsp</i>
                  Agence {{Auth::user()->profile->agency_name}} 
                <span style="float: right;"><i class="fas fa-clock fa-md"> &nbsp</i>{{$local->created_at->diffForHumans()}}</span>
              </nav>
              <div class="photo" >
                <div class="pic">
                @foreach($local->images as $image)
                  @if($image->main == 1)
                  <img src="{{asset($image->link)}}">
                  @endif
                @endforeach
                </div>
                <div class="map">
                  <table width="100%"  style="height: 100%">
                    <tr>
                      <td align="center"><i class="fas fa-map text-secondary"></i>&nbsp{{$local->wilaya}}, {{$local->commune}}</td>
                    </tr>
                  </table>
                </div>
              </div>
      
      <div class="description" style="height:89%">
        <div style="">
          <table width="100%" style="width: 100%;padding: 0">
            <tr>
              <td align="center"><i class="fas fa-shower text-secondary"></i> {{$local->nbrshower}}</td>
              <td align="center"><i class="fas fa-warehouse text-secondary"></i> {{$local->nbrgarage}}</td>
              <td align="center"><i class="fas fa-bed text-secondary"></i> {{$local->pieces}}</td>
              <td align="center"><i class="fas fa-vector-square text-secondary"></i> {{$local->surface}}m²</td>
            </tr>
          </table>
        </div>
        
        <div style="padding: 20px 20px 0 20px">
            <h2>{{$local->vl}}</h2>
            <h2 style="">{{$local->category->name}}</h2>
            <h1>{{$local->price}}Da</h1>
          

          <!-- <button>Wishlist</button> -->
        </div>
        <div style="display:flex;justify-content:center;margin-top:91px">
            <a class="btn-detail" href="{{route('local.edit',['id'=>$local->id])}}">Edit</a>
            <a class="btn-delete" href="{{route('local.delete',['id'=>$local->id])}}"  >Delete</a>
        </div>
        <div >
          
        </div>
    </div>
</div>
     
@endforeach
@else
<h3 class="text-center" style="color:white">empty</h3>

@endif
@stop


@section('script')

    <script>
$(".l10").css("background-color", "#52B586");
    </script>
@stop