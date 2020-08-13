@extends('layouts\frontend')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('css/stars.css')}}">

@stop

@section('content')

  <div class="container">
    <div class="row medium-padding50">
      <main class="main">
        <div class="col-lg-10 col-lg-offset-1">
          <div class="blog-details-author">

            <div class="blog-details-author-thumb" >
                <img src="{{asset('app/img/blog-details-author.png')}}" alt="Author">
            </div>

            <div class="blog-details-author-content">
              <div class="author-info">
                  <h5 class="author-name"  style="text-transform: uppercase">Agence {{$profile->agency_name}}</h5>
                  <div class="rating-holder" style="padding:0;margin:0">
                      <div class="c-rating c-rating--meduim" data-rating-value="4">
                      <button>1</button>
                      <button>2</button>
                      <button>3</button>
                      <button>4</button>
                      <button>5</button>
                      </div>
                  </div>
                </div>
                <p class="text">
                        <i class="fa fa-map-marker-alt"></i> &nbsp{{$profile->adress}}
                </p>
                <p class="text">
                    <i class="fas fa-phone "></i> &nbsp{{$profile->phone1}} @if($profile->phone2) / @endif {{$profile->phone2}}
                </p>
                <p class="text">
                    <i class="fas fa-envelope "></i> &nbsp{{$profile->user->email}}
                </p>
                <p class="text">
                    <i class="fab fa-facebook-square"></i> &nbsp{{$profile->fb}}
                </p>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

            
    <div class="container-fluid">
        <div class="heading text-center" >
          <h3 class="heading-title" >All OFFRES</h3>
          <div class="heading-line" style="margin-top: -20px;">
            <span class="short-line"></span>
            <span class="long-line"></span>
          </div>
        </div>
        <div class="row" style="margin-top: 50px; ">
        @foreach($locals as $local)
          <div class="col-lg-6">
            <div class="card-exp mx-auto" style="margin:0px auto 30px auto;height:320px">
              <nav>
                <i class="fas fa-user-circle fa-lg"> &nbsp</i>
                  Agence {{$local->user->profile->agency_name}}
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
                      <td align="center"><i class="fas fa-map text-secondary"></i> {{$local->wilaya}}, {{$local->commune}}</td>
                    </tr>
                  </table>
                </div>
              </div>
      
      <div class="description">
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
          <h3>{{$local->category->name}}</h3>
          <h1>{{$local->price}}Da</h1>
          <p>{{ str_limit(strip_tags($local->desc), 140) }}</p><br>
          <a href="{{route('detail',['id'=>$local->id])}}" class="btn-restore" style="margin: 0px 0 0 120px;">Details</a>
          <!-- <button>Wishlist</button> -->
        </div>
        <div >
          
        </div>
      </div>
      </div>
     
      </div>
       @endforeach
        </div>
    </div>

@stop