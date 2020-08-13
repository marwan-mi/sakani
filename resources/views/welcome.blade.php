@extends('layouts.frontend')

@section('style')

<link rel="stylesheet" type="text/css" href="{{asset('css/agence.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/stars.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<style>
.slick-prev:before,
    .slick-next:before {
      color: black;
    }
</style>
@stop
@section('content')

<section class="header2" >
  <div class="text-box" >
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <div class="firefly"></div>
    <h4 class="wordCarousel">    
        <img src="{{asset('img/logo2.png')}}" width="260px" height="190px"> 
        <div class="firefly"></div>

        <div> 
            <ul class="flip4"> 
                <li>Apartements</li>
                <li>Arab houses</li>
                <li>Stodios</li>  
                <li>Villas</li>
            </ul>
        </div>  
    </h4>
	</div>
</section>
<!-- ------------------------------------ LATEST OFFRES ----------------------------------- -->
<div class="container-fluid" id="explore">
        <div class="heading text-center" >
          <h3 class="heading-title" >LATEST OFFRES</h3>
          <div class="heading-line" style="margin-top: -20px;">
            <span class="short-line"></span>
            <span class="long-line"></span>
          </div>
        </div>
        <div class="row" style="margin-top: 50px;">
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
                  <span class="notify-badge">{{$local->vl}}</span>
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
          <p class="descp">{{ str_limit(strip_tags($local->desc), 140) }}</p><br>
          <a href="{{route('detail',['id'=>$local->slug])}}" class="btn-restore" style="margin: 0px 0 0 120px;">Details</a>
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


<!-- ------------------------------------ END LATEST OFFRES ----------------------------------- -->


<!-- ----------------------------------------- Selling -------------------------------------------- -->

    <div class="container-fluid">
        <div class="row bg-border-color">
            <div class="container">
                <div class="col-lg-12">
                <div class="offers">
                    <div class="row"><br><br>
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="heading">
                                <h4 class="h1 heading-title">Selling</h4>
                                <div class="heading-line" style="margin-top: -20px;">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row"> -->
                        
                        <div class="case-item-wrap your-class">
                          @foreach($s_locals as $local)
                          <a href="{{route('detail',['slug'=>$local->slug])}}">
                            <div class="">
                                <div class="case-item">
                                    <div class="case-item__thumb">
                                      @foreach($local->images as $image)
                                        @if($image->main == 1)
                                        <img src="{{asset($image->link)}}" width="350px" style="height:200px">
                                        @endif
                                      @endforeach
                                    </div>
                                    <h6 class="case-item__title">{{$local->price}}DA</h6>
                                    <h6 class="case-item__title">{{$local->wilaya}}, {{$local->commune}}</h6>
                                </div>
                            </div>
                          </a>
                          @endforeach
                        </div>
                        
                    <!-- </div> -->
                </div>

<!-- ----------------------------------------- END Selling -------------------------------------------- -->

<!-- ----------------------------------------- Renting -------------------------------------------- -->


                <div class="padded-50"></div>
                <div class="offers">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="heading">
                                <h4 class="h1 heading-title">Renting</h4>
                                <div class="heading-line" style="margin-top: -20px;">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="case-item-wrap your-class">
                      @foreach($r_locals as $local)
                      <a href="{{route('detail',['slug'=>$local->slug])}}">
                        <div class="">
                            <div class="case-item">
                                <div class="case-item__thumb">
                                  @foreach($local->images as $image)
                                    @if($image->main == 1)
                                    <img src="{{asset($image->link)}}"  width="350px" style="height:200px">
                                    @endif
                                  @endforeach
                                </div>
                                <h6 class="case-item__title">{{$local->price}}DA / {{$local->per}}</h6>
                                <h6 class="case-item__title">{{$local->wilaya}}, {{$local->commune}}</h6>
                            </div>
                        </div>
                      </a>
                      @endforeach
                        </div>
                </div>

<!-- ----------------------------------------- END Renting -------------------------------------------- -->

<!-- ----------------------------------------- END Rated Agencies -------------------------------------------- -->

                <div class="padded-50"></div>
                <div class="offers">
                    <div class="row" >
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="heading">
                                <h4 class="h1 heading-title">Rated Agencies</h4>
                                <div class="heading-line" style="margin-top: -20px;">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row case-item-wrap">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                      <div class="our-team">
                        <div class="picture">
                          <img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
                        </div>
                        <div class="team-content">
                          <h3 class="name">Michele Miller</h3>
                          <!-- --------------------- -->
                          <div class="rating-holder">
                            <div class="c-rating c-rating--big" data-rating-value="4">
                              <button>1</button>
                              <button>2</button>
                              <button>3</button>
                              <button>4</button>
                              <button>5</button>
                            </div>
                          </div>
                          <!-- --------------------------------------- -->
                        </div>
                        <ul class="social">
                          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
                          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
                          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
                          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
                        </ul>
                      </div>
                    </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                      <div class="our-team">
                        <div class="picture">
                          <img class="img-fluid" src="https://picsum.photos/130/130?image=839">
                        </div>
                        <div class="team-content">
                          <h3 class="name">Patricia Knott</h3>
                          <!-- --------------------- -->
                          <div class="rating-holder">
                            <div class="c-rating c-rating--big" data-rating-value="3.5">
                              <button>1</button>
                              <button>2</button>
                              <button>3</button>
                              <button>4</button>
                              <button>5</button>
                            </div>
                          </div>
                          <!-- --------------------------------------- -->
                        </div>

                        <ul class="social">
                          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
                          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
                          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
                          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
                        </ul>
                      </div>
                    </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                      <div class="our-team">
                        <div class="picture">
                          <img class="img-fluid" src="https://picsum.photos/130/130?image=856">
                        </div>
                        <div class="team-content">
                          <h3 class="name">Justin Ramos</h3>
                          <!-- --------------------- -->
                          <div class="rating-holder">
                            <div class="c-rating c-rating--big" data-rating-value="4.5">
                              <button>1</button>
                              <button>2</button>
                              <button>3</button>
                              <button>4</button>
                              <button>5</button>
                            </div>
                          </div>
                          <!-- --------------------------------------- -->
                        </div>
                        <ul class="social">
                          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
                          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
                          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
                          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
                        </ul>
                      </div>
                    </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                      <div class="our-team">
                        <div class="picture">
                          <img class="img-fluid" src="https://picsum.photos/130/130?image=836">
                        </div>
                        <div class="team-content">
                          <h3 class="name">Mary Huntley</h3>
                          <!-- --------------------- -->
                          <div class="rating-holder">
                            <div class="c-rating c-rating--big" data-rating-value="3.25">
                              <button>1</button>
                              <button>2</button>
                              <button>3</button>
                              <button>4</button>
                              <button>5</button>
                            </div>
                          </div>
                          <!-- --------------------------------------- -->
                        </div>
                        <ul class="social">
                          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
                          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
                          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
                          <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
                        </ul>
                      </div>
                    </div>
                    </div>
                </div>
                <div class="padded-50"></div>
            </div>
            </div>
        </div>
    </div>


    
        
@stop

@section('script')

<script type="text/javascript">
    $(document).ready(function(){
      $('.your-class').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
      });
    });
  </script>
@stop